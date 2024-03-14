<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Config;

use CodeIgniter\Config\BaseConfig;

class FreeRadius extends BaseConfig
{
    public bool $enabled = false;

    /**
     * --------------------------------------------------------------------
     * Customize the DB group used for each model
     * --------------------------------------------------------------------
     */
    public ?string $DBGroup = 'radius';

    /**
     * --------------------------------------------------------------------
     * Customize Name of FreeRadius Tables
     * --------------------------------------------------------------------
     * Only change if you want to rename the default FreeRadius table names
     *
     * It may be necessary to change the names of the tables for
     * security reasons, to prevent the conflict of table names,
     * the internal policy of the companies or any other reason.
     *
     * @var array<string, string>
     */
    public array $tables = [
        'radacct'       => 'radacct',
        'radcheck'      => 'radcheck',
        'radgroupcheck' => 'radgroupcheck',
        'radgroupreply' => 'radgroupreply',
        'radreply'      => 'radreply',
        'radusergroup'  => 'radusergroup',
        'radpostauth'   => 'radpostauth',
        'nas'           => 'nas',
        'nasreload'     => 'nasreload',
        'userinfo'      => 'userinfo',
    ];

    /**
     * --------------------------------------------------------------------
     * Customize realm used for username creation
     * --------------------------------------------------------------------
     */
    public ?string $usernameRealm = null;

    /**
     * --------------------------------------------------------------------
     * Customize allowed characters used for username creation
     * --------------------------------------------------------------------
     */
    public string $usernameCharacters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * --------------------------------------------------------------------
     * Customize characters length used for username creation
     * --------------------------------------------------------------------
     */
    public int $usernameLength = 6;

    /**
     * --------------------------------------------------------------------
     * Customize allowed characters used for password creation
     * --------------------------------------------------------------------
     */
    public string $passwordCharacters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * --------------------------------------------------------------------
     * Customize characters length used for password creation
     * --------------------------------------------------------------------
     */
    public int $passwordLength = 12;

    /**
     * --------------------------------------------------------------------
     * Customize default PPPoE group name
     * --------------------------------------------------------------------
     */
    public string $pppoeGroupName = 'PPPoE';

    /**
     * --------------------------------------------------------------------
     * Customize default PPPoE group priority
     * --------------------------------------------------------------------
     */
    public int $pppoeGroupPriority = 0;

    /**
     * --------------------------------------------------------------------
     * Customize default IP start for CGNAT
     * --------------------------------------------------------------------
     */
    public string $ipStart = '100.64.0.0';

    /**
     * --------------------------------------------------------------------
     * Customize default IP end for CGNAT
     * --------------------------------------------------------------------
     */
    public string $ipEnd = '100.64.63.255';
}
