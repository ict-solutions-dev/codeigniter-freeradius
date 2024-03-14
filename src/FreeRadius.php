<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius;

use Exception;
use IctSolutions\CodeIgniterFreeRadius\Enums\Attribute;
use IctSolutions\CodeIgniterFreeRadius\Enums\Operator;
use IctSolutions\CodeIgniterFreeRadius\Models\RadcheckModel;
use IctSolutions\CodeIgniterFreeRadius\Models\RadreplyModel;
use IctSolutions\CodeIgniterFreeRadius\Models\RadusergroupModel;
use IctSolutions\CodeIgniterFreeRadius\Models\UserinfoModel;
use InvalidArgumentException;

class FreeRadius
{
    public function addUser(?string $ipAddress, string $group, int $priority, object $userInfo): bool
    {
        try {
            $username = $this->username();
            $password = $this->password();
            $ipAddress ??= $this->generateRandomIpAddress();

            $this->addUsernamePassword($username, $password);
            $this->addFramedIpAddress($username, $ipAddress);
            $this->addPPPoEGroup($username);
            $this->addGroup($username, $group, $priority);
            $this->addUserInfo($username, $userInfo);

            return true;
        } catch (Exception $e) {
            log_message('error', 'An error occurred while adding a FreeRadius user: ' . $e->getMessage());

            return false;
        }
    }

    public function addUsernamePassword(string $username, string $password): bool
    {
        $radcheckModel = model(RadcheckModel::class);

        return $radcheckModel->insert([
            'username'  => $username,
            'attribute' => Attribute::CleartextPassword->value,
            'op'        => Operator::Assign->value,
            'value'     => $password,
        ]) !== false;
    }

    public function addFramedIpAddress(string $username, string $ipAddress): bool
    {
        $radreplyModel = model(RadreplyModel::class);

        return $radreplyModel->insert([
            'username'  => $username,
            'attribute' => Attribute::FramedIPAddress->value,
            'op'        => Operator::Equals->value,
            'value'     => $ipAddress,
        ]) !== false;
    }

    public function addGroup(string $username, string $group, int $priority): bool
    {
        $radusergroupModel = model(RadusergroupModel::class);

        return $radusergroupModel->insert([
            'username'  => $username,
            'groupname' => $group,
            'priority'  => $priority,
        ]) !== false;
    }

    public function addPPPoEGroup(string $username): bool
    {
        helper('setting');

        return $this->addGroup($username, setting('FreeRadius.pppoeGroupName'), setting('FreeRadius.pppoeGroupPriority')) !== false;
    }

    public function addUserInfo(string $username, object $userInfo): bool
    {
        $userinfoModel = model(UserinfoModel::class);

        return $userinfoModel->insert([
            'username'          => $username,
            'firstname'         => $userInfo->firstname,
            'lastname'          => $userInfo->lastname,
            'company'           => $userInfo->company,
            'address'           => $userInfo->address,
            'city'              => $userInfo->city,
            'netbox_address_id' => $userInfo->netbox_address_id,
            'notes'             => $userInfo->notes,
            'created_by'        => null,
        ]) !== false;
    }

    public function username(): string
    {
        return $this->generateRandomString('username');
    }

    public function password(): string
    {
        return $this->generateRandomString('password');
    }

    public function generateRandomIpAddress(): string
    {
        helper('setting');

        $radreplyModel = model(RadreplyModel::class);

        // Define IP range
        $ipStart = ip2long(setting('FreeRadius.ipStart'));
        $ipEnd   = ip2long(setting('FreeRadius.ipEnd'));

        // Get all used IPs
        $usedIps = $radreplyModel->findAll();
        $usedIps = array_map(static fn ($row) => ip2long($row['value']), $usedIps);

        // Generate all possible IPs within given range
        $allIps = range($ipStart, $ipEnd);

        // Subtract the used IPs, leave only free IPs
        $freeIps = array_diff($allIps, $usedIps);

        // Generate random IP among free ones
        $randomIp = long2ip($freeIps[array_rand($freeIps)]);

        return $randomIp;
    }

    public function generateRandomString(string $type): string
    {
        helper('setting');

        if ($type === 'username') {
            $realm      = setting('FreeRadius.usernameRealm');
            $characters = setting('FreeRadius.usernameCharacters');
            $length     = setting('FreeRadius.usernameLength');
            $suffix     = '@' . $realm;
        } elseif ($type === 'password') {
            $characters = setting('FreeRadius.passwordCharacters');
            $length     = setting('FreeRadius.passwordLength');
            $suffix     = '';
        } else {
            throw new InvalidArgumentException('Invalid type: ' . $type);
        }

        $randomString = '';
        $maxIndex     = strlen((string) $characters) - 1;

        for ($i = 0; $i < (int) $length; $i++) {
            $randomString .= $characters[random_int(0, $maxIndex)];
        }

        return $randomString . $suffix;
    }
}
