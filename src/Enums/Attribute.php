<?php

namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum Attribute: string
{
    /**
     * Returns an array of dropdown values.
     */
    public static function getDropdownValues(): array
    {
        $dropdownValues = [];

        foreach (self::cases() as $case) {
            $dropdownValues[$case->value] = $case->value;
        }

        return $dropdownValues;
    }

    public function toDescription(): string
    {
        return match ($this) {
            self::nasIpAddress      => lang('FreeRadius.attributeDescription.nasIpAddress'),
            self::CleartextPassword => lang('FreeRadius.attributeDescription.cleartextPassword'),
            self::FallThrough       => lang('FreeRadius.attributeDescription.fallThrough'),
            self::SimultaneousUse   => lang('FreeRadius.attributeDescription.simultaneousUse'),
            self::ServiceType       => lang('FreeRadius.attributeDescription.serviceType'),
            self::FramedIPAddress   => lang('FreeRadius.attributeDescription.framedIPAddress'),
            self::FramedIPNetmask   => lang('FreeRadius.attributeDescription.framedIPNetmask'),
            self::FramedProtocol    => lang('FreeRadius.attributeDescription.framedProtocol'),
            self::FramedMTU         => lang('FreeRadius.attributeDescription.framedMTU'),
            self::CiscoAVPair       => lang('FreeRadius.attributeDescription.ciscoAVPair'),
            self::CiscoNASPort      => lang('FreeRadius.attributeDescription.ciscoNASPort'),
            self::CiscoFramedRoute  => lang('FreeRadius.attributeDescription.ciscoFramedRoute'),
        };
    }

    public static function getValues(): array{
        return array_map(function($attr) {
            return $attr->value;
        }, Attribute::cases());;
    }

    public static function getServiceTypes(): array{
        return [
            'Login',
            'Framed',
            'Callback Login',
            'Callback Framed',
            'Outbound',
            'Administrative',
            'NAS Prompt',
            'Authenticate Only',
            ' Callback NAS Prompt',
            'Call Check',
            'Callback Administrative',
        ];
    }

    public static function getFramedProtocols(): array
    {
        return [
            'PPP',
            'SLIP',
            'AppleTalk Remote Access Protocol (ARAP)',
            'Gandalf proprietary SingleLink/MultiLink protocol',
            'Xylogics proprietary IPX/SLIP',
            'X.75 Synchronous',
        ];
    }

    public static function getFramedMtuMin(): int
    {
        return 64;
    }

    public static function getFramedMtuMax(): int
    {
        return 65535;
    }


    /**
     * Cleartext-Password is used to specify a user's password. This password is not encrypted and therefore should be protected.
     */
    case CleartextPassword = 'Cleartext-Password';

    /**
     * Fall-Through is used to enable or disable "fall-through" in the event that other checks do not match any entries in the check items.
     */
    case FallThrough = 'Fall-Through';

    /**
     * Simultaneous-Use is used to limit the number of simultaneous logins from any one user.
     */
    case SimultaneousUse = 'Simultaneous-Use';

    /**
     * Service-Type is used by the NAS to determine the nature of the service requested or provided.
     */
    case ServiceType = 'Service-Type';

    /**
     * Framed-IP-Address is used to specify the IP address to be configured for the user's network interface.
     */
    case FramedIPAddress = 'Framed-IP-Address';

    /**
     * Framed-IP-Netmask is used to specify the subnet mask to be configured for the user's network interface.
     */
    case FramedIPNetmask = 'Framed-IP-Netmask';

    /**
     * Framed-Protocol is used to specify the protocol to be configured for the user's network interface.
     */
    case FramedProtocol = 'Framed-Protocol';

    /**
     * Framed-MTU is used to specify the Maximum Transmission Unit(MTU) size for the user's network interface.
     */
    case FramedMTU = 'Framed-MTU';

    /**
     * Cisco-AVPair allows Vendor-Specific information to be carried in RADIUS packets.
     */
    case CiscoAVPair = 'Cisco-AVPair';

    /**
     * Cisco-NAS-Port provides a way to identify the physical port on the NAS which is handling the user session.
     */
    case CiscoNASPort = 'Cisco-NAS-Port';

    /**
     * Cisco-Framed-Route specifies routes to be configured in the user's routing table.
     */
    case CiscoFramedRoute = 'Cisco-Framed-Route';

    /**
     * NAS-IP-Address indicates the identifying IP Address of the NAS which is requesting authentication of the user, and SHOULD be unique to the NAS within the scope of the RADIUS server. NAS-IP-Address is only used in Access-Request packets. Either NAS-IP-Address or NAS-Identifier MUST be present in an Access-Request packet. Note that NAS-IP-Address MUST NOT be used to select the shared secret used to authenticate the request. The source IP address of the Access-Request packet MUST be used to select the shared secret.
     */
    case nasIpAddress = 'NAS-IP-Address';

    
    case CiscoServiceInfo = 'Cisco-Service-Info';
}
