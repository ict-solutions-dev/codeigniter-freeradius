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
            self::NasIpAddress         => lang('FreeRadius.attributeDescription.nasIpAddress'),
            self::CleartextPassword    => lang('FreeRadius.attributeDescription.cleartextPassword'),
            self::FallThrough          => lang('FreeRadius.attributeDescription.fallThrough'),
            self::SimultaneousUse      => lang('FreeRadius.attributeDescription.simultaneousUse'),
            self::ServiceType          => lang('FreeRadius.attributeDescription.serviceType'),
            self::FramedIPAddress      => lang('FreeRadius.attributeDescription.framedIPAddress'),
            self::FramedIPNetmask      => lang('FreeRadius.attributeDescription.framedIPNetmask'),
            self::FramedProtocol       => lang('FreeRadius.attributeDescription.framedProtocol'),
            self::FramedMTU            => lang('FreeRadius.attributeDescription.framedMTU'),
            self::CiscoAVPair          => lang('FreeRadius.attributeDescription.ciscoAVPair'),
            self::CiscoNASPort         => lang('FreeRadius.attributeDescription.ciscoNASPort'),
            self::CiscoFramedRoute     => lang('FreeRadius.attributeDescription.ciscoFramedRoute'),
            self::AcctAuthentic        => lang('FreeRadius.attributeDescription.acctAuthentic'),
            self::AcctTerminateCause   => lang('FreeRadius.attributeDescription.acctTerminateCause'),
            self::AcctOutputOctets     => lang('FreeRadius.attributeDescription.acctOutputOctets'),
            self::AcctInterval         => lang('FreeRadius.attributeDescription.acctInterval'),
            self::AcctSessionId        => lang('FreeRadius.attributeDescription.acctSessionId'),
            self::AcctUniqueId         => lang('FreeRadius.attributeDescription.acctUniqueId'),
            self::AcctStartTime        => lang('FreeRadius.attributeDescription.acctStartTime'),
            self::AcctUpdateTime       => lang('FreeRadius.attributeDescription.acctUpdateTime'),
            self::AcctStopTime         => lang('FreeRadius.attributeDescription.acctStopTime'),
            self::AcctSessionTime      => lang('FreeRadius.attributeDescription.acctSessionTime'),
            self::NasPortId            => lang('FreeRadius.attributeDescription.nasPortId'),
            self::NasPortType          => lang('FreeRadius.attributeDescription.nasPortType'),
            self::AcctInputOctets      => lang('FreeRadius.attributeDescription.acctInputOctets'),
            self::CiscoServiceInfo     => lang('FreeRadius.attributeDescription.ciscoServiceInfo'),
            self::MSPrimaryDNSServer   => lang('FreeRadius.attributeDescription.msPrimaryDNSServer'),
            self::MSSecondaryDNSServer => lang('FreeRadius.attributeDescription.msSecondaryDNSServer'),
        };
    }

    public static function getValues(): array
    {
        return array_map(static fn ($attr) => $attr->value, Attribute::cases());
    }

    public static function getServiceTypes(): array
    {
        return [
            'Login',
            'Framed',
            'Callback Login',
            'Callback Framed',
            'Outbound',
            'Administrative',
            'NAS Prompt',
            'Authenticate Only',
            'Callback NAS Prompt',
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

    case AcctSessionId      = 'Acct-Session-Id';
    case AcctUniqueId       = 'Acct-Unique-Id';
    case NasPortId          = 'NAS-Port-Id';
    case NasPortType        = 'NAS-Port-Type';
    case AcctStartTime      = 'Acct-Start-Time';
    case AcctUpdateTime     = 'Acct-Update-Time';
    case AcctStopTime       = 'Acct-Stop-Time';
    case AcctInterval       = 'Acct-Interval';
    case AcctSessionTime    = 'Acct-Session-Time';
    case AcctAuthentic      = 'Acct-Authentic';
    case AcctInputOctets    = 'Acct-Input-Octets';
    case AcctOutputOctets   = 'Acct-Output-Octets';
    case AcctTerminateCause = 'Acct-Terminate-Cause';

    /**
     * Cleartext-Password is used to specify a user's password. This password is not encrypted and therefore should be protected.
     */
    case CleartextPassword = 'Cleartext-Password';

    /**
     * Fall-Through is used to enable or disable "fall-through" in the event that other checks do not match any entries in the check items.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Fall_002dThrough.html#SEC353
     */
    case FallThrough = 'Fall-Through';

    /**
     * Simultaneous-Use is used to limit the number of simultaneous logins from any one user.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Simultaneous_002dUse.html#SEC369
     */
    case SimultaneousUse = 'Simultaneous-Use';

    /**
     * Service-Type is used by the NAS to determine the nature of the service requested or provided.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Service_002dType.html#SEC321
     */
    case ServiceType = 'Service-Type';

    /**
     * Framed-IP-Address is used to specify the IP address to be configured for the user's network interface.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Framed_002dIP_002dAddress.html#SEC309
     */
    case FramedIPAddress = 'Framed-IP-Address';

    /**
     * Framed-IP-Netmask is used to specify the subnet mask to be configured for the user's network interface.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Framed_002dIP_002dNetmask.html#SEC310
     */
    case FramedIPNetmask = 'Framed-IP-Netmask';

    /**
     * Framed-Protocol is used to specify the protocol to be configured for the user's network interface.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Framed_002dProtocol.html#SEC312
     */
    case FramedProtocol = 'Framed-Protocol';

    /**
     * Framed-MTU is used to specify the Maximum Transmission Unit(MTU) size for the user's network interface.
     * More information: https://www.gnu.org/software/radius/manual/html_node/Framed_002dMTU.html#SEC311
     */
    case FramedMTU = 'Framed-MTU';

    /**
     * Cisco-AVPair allows Vendor-Specific information to be carried in RADIUS packets.
     * More information: https://www.cisco.com/c/en/us/td/docs/ios-xml/ios/sec_usr_radatt/configuration/xe-16/sec-usr-radatt-xe-16-book/sec-rad-ov-ietf-attr.html
     */
    case CiscoAVPair = 'Cisco-AVPair';

    /**
     * Cisco-NAS-Port provides a way to identify the physical port on the NAS which is handling the user session.
     * More information: https://www.cisco.com/c/en/us/td/docs/ios-xml/ios/sec_usr_radatt/configuration/xe-16/sec-usr-radatt-xe-16-book/sec-rad-ov-ietf-attr.html
     */
    case CiscoNASPort = 'Cisco-NAS-Port';

    /**
     * Cisco-Framed-Route specifies routes to be configured in the user's routing table.
     * More information: https://www.cisco.com/c/en/us/td/docs/ios-xml/ios/sec_usr_radatt/configuration/xe-16/sec-usr-radatt-xe-16-book/sec-rad-ov-ietf-attr.html
     */
    case CiscoFramedRoute = 'Cisco-Framed-Route';

    /**
     * Cisco-Service-Info
     * More information: https://www.cisco.com/c/en/us/td/docs/ios-xml/ios/sec_usr_radatt/configuration/xe-16/sec-usr-radatt-xe-16-book/sec-rad-ov-ietf-attr.html
     */
    case CiscoServiceInfo = 'Cisco-Service-Info';

    /**
     * NAS-IP-Address indicates the identifying IP Address of the NAS which is requesting authentication of the user, and SHOULD be unique to the NAS within the scope of the RADIUS server. NAS-IP-Address is only used in Access-Request packets. Either NAS-IP-Address or NAS-Identifier MUST be present in an Access-Request packet. Note that NAS-IP-Address MUST NOT be used to select the shared secret used to authenticate the request. The source IP address of the Access-Request packet MUST be used to select the shared secret.
     * More information:
     */
    case NasIpAddress = 'NAS-IP-Address';

    /**
     * The MS-Primary-DNS-Server Attribute is used to indicate the address of the primary Domain Name Server (DNS) [16, 17] server to be used by the PPP peer.
     * More information: https://www.rfc-editor.org/rfc/rfc2548
     */
    case MSPrimaryDNSServer = 'MS-Primary-DNS-Server';

    /**
     * The MS-Secondary-DNS-Server Attribute is used to indicate the address of the secondary DNS server to be used by the PPP peer.
     * More information: https://www.rfc-editor.org/rfc/rfc2548
     */
    case MSSecondaryDNSServer = 'MS-Secondary-DNS-Server';
}
