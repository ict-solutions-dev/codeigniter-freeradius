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
            self::NasIpAddress               => lang('FreeRadius.attributeDescription.NAS-Ip-Address'),
            self::CleartextPassword          => lang('FreeRadius.attributeDescription.cleartextPassword'),
            self::FallThrough                => lang('FreeRadius.attributeDescription.fallThrough'),
            self::SimultaneousUse            => lang('FreeRadius.attributeDescription.simultaneousUse'),
            self::ServiceType                => lang('FreeRadius.attributeDescription.serviceType'),
            self::FramedIPAddress            => lang('FreeRadius.attributeDescription.Framed-IP-Address'),
            self::FramedIPNetmask            => lang('FreeRadius.attributeDescription.Framed-IP-Netmask'),
            self::FramedProtocol             => lang('FreeRadius.attributeDescription.Framed-Protocol'),
            self::FramedMTU                  => lang('FreeRadius.attributeDescription.Framed-MTU'),
            self::CiscoAVPair                => lang('FreeRadius.attributeDescription.ciscoAVPair'),
            self::CiscoNASPort               => lang('FreeRadius.attributeDescription.ciscoNASPort'),
            self::CiscoFramedRoute           => lang('FreeRadius.attributeDescription.ciscoFramedRoute'),
            self::AcctAuthentic              => lang('FreeRadius.attributeDescription.Acct-Authentic'),
            self::AcctTerminateCause         => lang('FreeRadius.attributeDescription.Acct-TerminateCause'),
            self::AcctOutputOctets           => lang('FreeRadius.attributeDescription.Acct-OutputOctets'),
            self::AcctInterval               => lang('FreeRadius.attributeDescription.Acct-Interval'),
            self::AcctSessionId              => lang('FreeRadius.attributeDescription.Acct-SessionId'),
            self::AcctUniqueId               => lang('FreeRadius.attributeDescription.Acct-UniqueId'),
            self::AcctStartTime              => lang('FreeRadius.attributeDescription.Acct-StartTime'),
            self::AcctUpdateTime             => lang('FreeRadius.attributeDescription.Acct-UpdateTime'),
            self::AcctStopTime               => lang('FreeRadius.attributeDescription.Acct-StopTime'),
            self::AcctSessionTime            => lang('FreeRadius.attributeDescription.Acct-SessionTime'),
            self::NasPortId                  => lang('FreeRadius.attributeDescription.NAS-PortId'),
            self::NasPortType                => lang('FreeRadius.attributeDescription.Nas-PortType'),
            self::AcctInputOctets            => lang('FreeRadius.attributeDescription.Acct-InputOctets'),
            self::UserPassword               => lang('FreeRadius.attribute.User-Password'),
            self::UserName                   => lang('FreeRadius.attribute.User-Name'),
            self::TunnelType                 => lang('FreeRadius.attribute.Tunnel-Type'),
            self::TunnelReject               => lang('FreeRadius.attribute.Tunnel-Reject'),
            self::TunnelStop                 => lang('FreeRadius.attribute.Tunnel-Stop'),
            self::TunnelStart                => lang('FreeRadius.attribute.Tunnel-Start'),
            self::TunnelServerEndpoint       => lang('FreeRadius.attribute.Tunnel-Server-Endpoint'),
            self::TunnelServerAuthID         => lang('FreeRadius.attribute.Tunnel-Server-Auth-ID'),
            self::TunnelPrivateGroupID       => lang('FreeRadius.attribute.Tunnel-Private-Group-ID'),
            self::TunnelPreference           => lang('FreeRadius.attribute.Tunnel-Preference'),
            self::TunnelPassword             => lang('FreeRadius.attribute.Tunnel-Password'),
            self::TunnelMediumType           => lang('FreeRadius.attribute.Tunnel-Medium-Type'),
            self::TunnelLinkStop             => lang('FreeRadius.attribute.Tunnel-Link-Stop'),
            self::TunnelLinkStart            => lang('FreeRadius.attribute.Tunnel-Link-Start'),
            self::TunnelLinkReject           => lang('FreeRadius.attribute.Tunnel-Link-Reject'),
            self::TunnelClientEndpoint       => lang('FreeRadius.attribute.Tunnel-Client-Endpoint'),
            self::TunnelClientAuthID         => lang('FreeRadius.attribute.Tunnel-Client-Auth-ID'),
            self::TunnelAssignmentID         => lang('FreeRadius.attribute.Tunnel-Assignment-ID'),
            self::TerminationAction          => lang('FreeRadius.attribute.Termination-Action'),
            self::StatefulIPv6AddressPool    => lang('FreeRadius.attribute.Stateful-IPv6-Address-Pool'),
            self::State                      => lang('FreeRadius.attribute.State'),
            self::SessionTimeout             => lang('FreeRadius.attribute.Session-Timeout'),
            self::ServiceSelection           => lang('FreeRadius.attribute.Service-Selection'),
            self::RouteIPv6Information       => lang('FreeRadius.attribute.Route-IPv6-Information'),
            self::ReplyMessage               => lang('FreeRadius.attribute.Reply-Message'),
            self::ProxyState                 => lang('FreeRadius.attribute.Proxy-State'),
            self::PortLimit                  => lang('FreeRadius.attribute.Port-Limit'),
            self::PasswordRetry              => lang('FreeRadius.attribute.Password-Retry'),
            self::PKMSSCert                  => lang('FreeRadius.attribute.PKM-SS-Cert'),
            self::PKMSAID                    => lang('FreeRadius.attribute.PKM-SAID'),
            self::PKMSADescriptor            => lang('FreeRadius.attribute.PKM-SA-Descriptor'),
            self::PKMCryptosuiteList         => lang('FreeRadius.attribute.PKM-Cryptosuite-List'),
            self::PKMConfigSettings          => lang('FreeRadius.attribute.PKM-Config-Settings'),
            self::PKMCACert                  => lang('FreeRadius.attribute.PKM-CA-Cert'),
            self::PKMAUTHKey                 => lang('FreeRadius.attribute.PKM-MA-Key'),
            self::NASPort                    => lang('FreeRadius.attribute.NAS-Port'),
            self::NASIdentifier              => lang('FreeRadius.attribute.NAS-Identifier'),
            self::NASIPv6Address             => lang('FreeRadius.attribute.NAS-IPv6-Address'),
            self::MobileNodeIdentifier       => lang('FreeRadius.attribute.Mobile-Node-Identifier'),
            self::MSARAPChallenge            => lang('FreeRadius.attribute.MS-ARAP-Challenge'),
            self::MSARAPPasswordChangeReason => lang('FreeRadius.attribute.MS-ARAP-Password-Change-Reason'),
            self::MSAcctAuthType             => lang('FreeRadius.attribute.MS-Acct-Auth-Type'),
            self::MSAcctEAPType              => lang('FreeRadius.attribute.MS-Acct-EAP-Type'),
            self::MSBAPUsage                 => lang('FreeRadius.attribute.MS-BAP-Usage'),
            self::MSCHAPCPW1                 => lang('FreeRadius.attribute.MS-CHAP-CPW-1'),
            self::MSCHAPCPW2                 => lang('FreeRadius.attribute.MS-CHAP-CPW-2'),
            self::MSCHAPChallenge            => lang('FreeRadius.attribute.MS-CHAP-Challenge'),
            self::MSCHAPDomain               => lang('FreeRadius.attribute.MS-CHAP-Domain'),
            self::MSCHAPError                => lang('FreeRadius.attribute.MS-CHAP-Error'),
            self::MSCHAPLMEncPW              => lang('FreeRadius.attribute.MS-CHAP-LM-Enc-PW'),
            self::MSCHAPMPPEKeys             => lang('FreeRadius.attribute.MS-CHAP-MPPE-Keys'),
            self::MSCHAPNTEncPW              => lang('FreeRadius.attribute.MS-CHAP-NT-Enc-PW'),
            self::MSCHAPResponse             => lang('FreeRadius.attribute.MS-CHAP-Response'),
            self::MSCHAP2CPW                 => lang('FreeRadius.attribute.MS-CHAP2-CPW'),
            self::MSCHAP2Response            => lang('FreeRadius.attribute.MS-CHAP2-Response'),
            self::MSCHAP2Success             => lang('FreeRadius.attribute.MS-CHAP2-Success'),
            self::MSFilter                   => lang('FreeRadius.attribute.MS-Filter'),
            self::MSLinkDropTimeLimit        => lang('FreeRadius.attribute.MS-Link-Drop-Time-Limit'),
            self::MSLinkUtilizationThreshold => lang('FreeRadius.attribute.MS-Link-Utilization-Threshold'),
            self::MSMPPEEncryptionPolicy     => lang('FreeRadius.attribute.MS-MPPE-Encryption-Policy'),
            self::MSMPPEEncryptionTypes      => lang('FreeRadius.attribute.MS-MPPE-Encryption-Types'),
            self::MSMPPERecvKey              => lang('FreeRadius.attribute.MS-MPPE-Recv-Key'),
            self::MSMPPESendKey              => lang('FreeRadius.attribute.MS-MPPE-Send-Key'),
            self::MSNewARAPPassword          => lang('FreeRadius.attribute.MS-New-ARAP-Password'),
            self::MSOldARAPPassword          => lang('FreeRadius.attribute.MS-Old-ARAP-Password'),
            self::MSPrimaryDNSServer         => lang('FreeRadius.attribute.MS-Primary-DNS-Server'),
            self::MSPrimaryNBNSServer        => lang('FreeRadius.attribute.MS-Primary-NBNS-Server'),
            self::MSRASVendor                => lang('FreeRadius.attribute.MS-RAS-Vendor'),
            self::MSRASVersion               => lang('FreeRadius.attribute.MS-RAS-Version'),
            self::MSSecondaryDNSServer       => lang('FreeRadius.attribute.MS-Secondary-DNS-Server'),
            self::MSSecondaryNBNSServer      => lang('FreeRadius.attribute.MS-Secondary-NBNS-Server'),
            self::MSAcctAuthType             => lang('FreeRadius.attribute.MS-Acct-Auth-Type'),
            self::MSARAPPasswordChangeReason => lang('FreeRadius.attribute.MS-ARAP-Password-Change-Reason'),
            self::MSARAPChallenge            => lang('FreeRadius.attribute.MS-ARAP-Challenge'),
            self::LongExtendedType2          => lang('FreeRadius.attribute.Long-Extended-Type2'),
            self::LongExtendedType1          => lang('FreeRadius.attribute.Long-Extended-Type1'),
            self::LoginTCPPort               => lang('FreeRadius.attribute.Login-TCP-Port'),
            self::LoginService               => lang('FreeRadius.attribute.Login-Service'),
            self::LoginLATService            => lang('FreeRadius.attribute.Login-LAT-Service'),
            self::LoginLATPort               => lang('FreeRadius.attribute.Login-LAT-Port'),
            self::LoginLATNode               => lang('FreeRadius.attribute.Login-LAT-Node'),
            self::LoginLATGroup              => lang('FreeRadius.attribute.Login-LAT-Group'),
            self::LoginIPv6Host              => lang('FreeRadius.attribute.Login-IPv6-Host'),
            self::LoginIPHost                => lang('FreeRadius.attribute.Login-IP-Host'),
            self::IdleTimeout                => lang('FreeRadius.attribute.Idle-Timeout'),
            self::FramedRouting              => lang('FreeRadius.attribute.Framed-Routing'),
            self::FramedRoute                => lang('FreeRadius.attribute.Framed-Route'),
            self::FramedPool                 => lang('FreeRadius.attribute.Framed-Pool'),
            self::FramedManagementProtocol   => lang('FreeRadius.attribute.Framed-Management-Protocol'),
            self::FramedInterfaceId          => lang('FreeRadius.attribute.Framed-Interface-Id'),
            self::FramedIPv6Route            => lang('FreeRadius.attribute.Framed-IPv6-Route'),
            self::FramedIPv6Prefix           => lang('FreeRadius.attribute.Framed-IPv6-Prefix'),
            self::FramedIPv6Pool             => lang('FreeRadius.attribute.Framed-IPv6-Pool'),
            self::FramedIPv6Address          => lang('FreeRadius.attribute.Framed-IPv6-Address'),
            self::FramedIPXNetwork           => lang('FreeRadius.attribute.Framed-IPX-Network'),
            self::FramedCompression          => lang('FreeRadius.attribute.Framed-Compression'),
            self::FramedAppleTalkZone        => lang('FreeRadius.attribute.Framed-AppleTalk-Zone'),
            self::FramedAppleTalkNetwork     => lang('FreeRadius.attribute.Framed-AppleTalk-Network'),
            self::FramedAppleTalkLink        => lang('FreeRadius.attribute.Framed-AppleTalk-Link'),
            self::FilterId                   => lang('FreeRadius.attribute.Filter-Id'),
            self::FilterID                   => lang('FreeRadius.attribute.Filter-ID'),
            self::ExtendedVendorSpecific6    => lang('FreeRadius.attribute.Extended-Vendor-Specific6'),
            self::ExtendedVendorSpecific5    => lang('FreeRadius.attribute.Extended-Vendor-Specific5'),
            self::ExtendedVendorSpecific4    => lang('FreeRadius.attribute.Extended-Vendor-Specific4'),
            self::ExtendedVendorSpecific3    => lang('FreeRadius.attribute.Extended-Vendor-Specific3'),
            self::ExtendedVendorSpecific2    => lang('FreeRadius.attribute.Extended-Vendor-Specific2'),
            self::ExtendedVendorSpecific1    => lang('FreeRadius.attribute.Extended-Vendor-Specific1'),
            self::ExtendedType4              => lang('FreeRadius.attribute.Extended-Type4'),
            self::ExtendedType3              => lang('FreeRadius.attribute.Extended-Type3'),
            self::ExtendedType2              => lang('FreeRadius.attribute.Extended-Type2'),
            self::ExtendedType1              => lang('FreeRadius.attribute.Extended-Type1'),
            self::EventTimestamp             => lang('FreeRadius.attribute.Event-Timestamp'),
            self::ErrorCause                 => lang('FreeRadius.attribute.Error-Cause'),
            self::EAPMessage                 => lang('FreeRadius.attribute.EAP-Message'),
            self::DelegatedIPv6PrefixPool    => lang('FreeRadius.attribute.Delegated-IPv6-Prefix-Pool'),
            self::DSLiteTunnelName           => lang('FreeRadius.attribute.DSLite-Tunnel-Name'),
            self::DNSServerIPv6Address       => lang('FreeRadius.attribute.DNSServer-IPv6-Address'),
            self::ConnectInfo                => lang('FreeRadius.attribute.Connect-Info'),
            self::ConfigurationToken         => lang('FreeRadius.attribute.Configuration-Token'),
            self::_Class                     => lang('FreeRadius.attribute.Class'),
            self::ChargeableUserIdentity     => lang('FreeRadius.attribute.Chargeable-User-Identity'),
            self::CallingStationId           => lang('FreeRadius.attribute.Calling-Station-Id'),
            self::CalledStationId            => lang('FreeRadius.attribute.Called-Station-Id'),
            self::CallbackNumber             => lang('FreeRadius.attribute.Callback-Number'),
            self::CallbackId                 => lang('FreeRadius.attribute.Callback-Id'),
            self::CHAPPassword               => lang('FreeRadius.attribute.CHAP-Password'),
            self::CHAPChallenge              => lang('FreeRadius.attribute.CHAP-Challenge'),
            self::AcctDelayTime              => lang('FreeRadius.attribute.Acct-Delay-Time'),
            self::AccountingResponse         => lang('FreeRadius.attribute.Accounting-Response'),
            self::AccountingRequest          => lang('FreeRadius.attribute.Accounting-Request'),
            self::AccessRequest              => lang('FreeRadius.attribute.Access-Request'),
            self::AccessReject               => lang('FreeRadius.attribute.Access-Reject'),
            self::AccessChallenge            => lang('FreeRadius.attribute.Access-Challenge'),
            self::AccessAccept               => lang('FreeRadius.attribute.Access-Accept'),
            self::ARAPZoneAccess             => lang('FreeRadius.attribute.ARAP-Zone-Access'),
            self::ARAPSecurityData           => lang('FreeRadius.attribute.ARAP-Security-Data'),
            self::ARAPSecurity               => lang('FreeRadius.attribute.ARAP-Security'),
            self::ARAPPassword               => lang('FreeRadius.attribute.ARAP-Password'),
            self::ARAPFeatures               => lang('FreeRadius.attribute.ARAP-Features'),
            self::ARAPChallengeResponse      => lang('FreeRadius.attribute.ARAP-Challenge-Response'),
            self::AcctSessionId              => lang('FreeRadius.attribute.Acct-Session-Id'),
            self::AcctUniqueId               => lang('FreeRadius.attribute.Acct-Unique-Id'),
            self::NasPortId                  => lang('FreeRadius.attribute.Nas-Port-Id'),
            self::NasPortType                => lang('FreeRadius.attribute.Nas-Port-Type'),
            self::AcctStartTime              => lang('FreeRadius.attribute.Acct-Start-Time'),
            self::AcctUpdateTime             => lang('FreeRadius.attribute.Acct-Update-Time'),
            self::AcctStopTime               => lang('FreeRadius.attribute.Acct-Stop-Time'),
            self::AcctInterval               => lang('FreeRadius.attribute.Acct-Interval'),
            self::AcctSessionTime            => lang('FreeRadius.attribute.Acct-Session-Time'),
            self::AcctAuthentic              => lang('FreeRadius.attribute.Acct-Authentic'),
            self::AcctInputOctets            => lang('FreeRadius.attribute.Acct-Input-Octets'),
            self::AcctOutputOctets           => lang('FreeRadius.attribute.Acct-Output-Octets'),
            self::AcctTerminateCause         => lang('FreeRadius.attribute.Acct-Terminate-Cause'),
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
    case UserPassword = 'User-Password';

    case UserName = 'User-Name';

    case TunnelType = 'Tunnel-Type';

    case TunnelReject = 'Tunnel-Reject';

    case TunnelStop = 'Tunnel-Stop';

    case TunnelStart = 'Tunnel-Start';

    case TunnelServerEndpoint = 'Tunnel-Server-Endpoint';

    case TunnelServerAuthID = 'Tunnel-Server-Auth-ID';

    case TunnelPrivateGroupID = 'Tunnel-Private-Group-ID';

    case TunnelPreference = 'Tunnel-Preference';

    case TunnelPassword = 'Tunnel-Password';

    case TunnelMediumType = 'Tunnel-Medium-Type';

    case TunnelLinkStop = 'Tunnel-Link-Stop';

    case TunnelLinkStart = 'Tunnel-Link-Start';

    case TunnelLinkReject = 'Tunnel-Link-Reject';

    case TunnelClientEndpoint = 'Tunnel-Client-Endpoint';

    case TunnelClientAuthID = 'Tunnel-Client-Auth-ID';

    case TunnelAssignmentID = 'Tunnel-Assignment-ID';

    case TerminationAction = 'Termination-Action';

    case StatefulIPv6AddressPool = 'Stateful-IPv6-Address-Pool';

    case State = 'State';

    case SessionTimeout = 'Session-Timeout';

    case ServiceSelection = 'Service-Selection';

    case RouteIPv6Information = 'Route-IPv6-Information';

    case ReplyMessage = 'Reply-Message';

    case ProxyState = 'Proxy-State';

    case PortLimit = 'Port-Limit';

    case PasswordRetry = 'Password-Retry';

    case PKMSSCert = 'PKM-SS-Cert';

    case PKMSAID = 'PKM-SAID';

    case PKMSADescriptor = 'PKM-SA-Descriptor';

    case PKMCryptosuiteList = 'PKM-Cryptosuite-List';

    case PKMConfigSettings = 'PKM-Config-Settings';

    case PKMCACert = 'PKM-CA-Cert';

    case PKMAUTHKey = 'PKM-AUTH-Key';

    case NASPort = 'NAS-Port';

    case NASIdentifier = 'NAS-Identifier';

    case NASIPv6Address = 'NAS-IPv6-Address';

    case MobileNodeIdentifier = 'Mobile-Node-Identifier';

    case MSCHAPDomain = 'MS-CHAP-Domain';

    case MSCHAPChallenge = 'MS-CHAP-Challenge';

    case MSCHAPCPW2 = 'MS-CHAP-CPW-2';

    case MSCHAPCPW1 = 'MS-CHAP-CPW-1';

    case MSBAPUsage = 'MS-BAP-Usage';

    case MSCHAPError = 'MS-CHAP-Error';

    case MSCHAPLMEncPW = 'MS-CHAP-LM-Enc-PW';

    case MSAcctEAPType = 'MS-Acct-EAP-Type';

    case MSHAPMPPEKeys = 'MS-CHAP-MPPE-Keys';

    case MSCHAPNTEncPW = 'MS-CHAP-NT-Enc-PW';

    case MSCHAPResponse = 'MS-CHAP-Response';

    case MSCHAP2CPW = 'MS-CHAP2-CPW';

    case MSCHAP2Response = 'MS-CHAP2-Response';

    case MSAcctAuthType = 'MS-Acct-Auth-Type';

    case MSCHAP2Success = 'MS-CHAP2-Success';

    case MSFilter = 'MS-Filter';

    case MSMPPEEncryptionPolicy = 'MS-MPPE-Encryption-Policy';

    case MSMPPEEncryptionTypes = 'MS-MPPE-Encryption-Types';

    case MSMPPERecvKey = 'MS-MPPE-Recv-Key';

    case MSMPPESendKey = 'MS-MPPE-Send-Key';

    case MSNewARAPPassword = 'MS-New-ARAP-Password';

    case MSOldARAPPassword = 'MS-Old-ARAP-Password';

    case MSPrimaryDNSServer = 'MS-Primary-DNS-Server';

    case MSPrimaryNBNSServer = 'MS-Primary-NBNS-Server';

    case MSRASVendor = 'MS-RAS-Vendor';

    case MSRASVersion = 'MS-RAS-Version';

    case MSSecondaryDNSServer = 'MS-Secondary-DNS-Server';

    case MSSecondaryNBNSServer = 'MS-Secondary-NBNS-Server';

    case MSLinkDropTimeLimit = 'MS-Link-Drop-Time-Limit';

    case MSLinkUtilizationThreshold = 'MS-Link-Utilization-Threshold';

    case MSARAPPasswordChangeReason = 'MS-ARAP-Password-Change-Reason';

    case MSARAPChallenge = 'MS-ARAP-Challenge';

    case LongExtendedType2 = 'Long-Extended-Type-2';

    case LongExtendedType1 = 'Long-Extended-Type-1';

    case LoginTCPPort = 'Login-TCP-Port';

    case LoginService = 'Login-Service';

    case LoginLATService = 'Login-LAT-Service';

    case LoginLATPort = 'Login-LAT-Port';

    case LoginLATNode = 'Login-LAT-Node';

    case LoginLATGroup = 'Login-LAT-Group';

    case LoginIPv6Host = 'Login-IPv6-Host';

    case LoginIPHost = 'Login-IP-Host';

    case IdleTimeout = 'Idle-Timeout';

    case FramedRouting = 'Framed-Routing';

    case FramedRoute = 'Framed-Route';

    case FramedPool = 'Framed-Pool';

    case FramedManagementProtocol = 'Framed-Management-Protocol';

    case FramedInterfaceId = 'Framed-Interface-Id';

    case FramedIPv6Route = 'Framed-IPv6-Route';

    case FramedIPv6Prefix = 'Framed-IPv6-Prefix';

    case FramedIPv6Pool = 'Framed-IPv6-Pool';

    case FramedIPv6Address = 'Framed-IPv6-Address';

    case FramedIPXNetwork = 'Framed-IPX-Network';

    case FramedCompression = 'Framed-Compression';

    case FramedAppleTalkZone = 'Framed-AppleTalk-Zone';

    case FramedAppleTalkNetwork = 'Framed-AppleTalk-Network';

    case FramedAppleTalkLink = 'Framed-AppleTalk-Link';

    case FilterId = 'Filter-Id';

    case FilterID = 'Filter-ID';

    case ExtendedVendorSpecific6 = 'Extended-Vendor-Specific-6';

    case ExtendedVendorSpecific5 = 'Extended-Vendor-Specific-5';

    case ExtendedVendorSpecific4 = 'Extended-Vendor-Specific-4';

    case ExtendedVendorSpecific3 = 'Extended-Vendor-Specific-3';

    case ExtendedVendorSpecific2 = 'Extended-Vendor-Specific-2';

    case ExtendedVendorSpecific1 = 'Extended-Vendor-Specific-1';

    case ExtendedType4 = 'Extended-Type-4';

    case ExtendedType3 = 'Extended-Type-3';

    case ExtendedType2 = 'Extended-Type-2';

    case ExtendedType1 = 'Extended-Type-1';

    case EventTimestamp = 'Event-Timestamp';

    case ErrorCause = 'Error-Cause';

    case EAPMessage = 'EAP-Message';

    case DelegatedIPv6PrefixPool = 'Delegated-IPv6-Prefix-Pool';

    case DSLiteTunnelName = 'DS-Lite-Tunnel-Name';

    case DNSServerIPv6Address = 'DNS-Server-IPv6-Address';

    case ConnectInfo = 'Connect-Info';

    case ConfigurationToken = 'Configuration-Token';

    case _Class = 'Class';

    case ChargeableUserIdentity = 'Chargeable-User-Identity';

    case CallingStationId = 'Calling-Station-Id';

    case CalledStationId = 'Called-Station-Id';

    case CallbackNumber = 'Callback-Number';

    case CallbackId = 'Callback-Id';

    case CHAPPassword = 'CHAP-Password';

    case CHAPChallenge = 'CHAP-Challenge';

    case AcctDelayTime = 'Acct-Delay-Time';

    case AccountingResponse = 'Accounting-Response';

    case AccountingRequest = 'Accounting-Request';

    case AccessRequest = 'Access-Request';

    case AccessReject = 'Access-Reject';

    case AccessChallenge = 'Access-Challenge';

    case AccessAccept = 'Access-Accept';

    case ARAPZoneAccess = 'ARAP-Zone-Access';

    case ARAPSecurityData = 'ARAP-Security-Data';

    case ARAPSecurity = 'ARAP-Security';

    case ARAPPassword = 'ARAP-Password';

    case ARAPFeatures = 'ARAP-Features';

    case ARAPChallengeResponse = 'ARAP-Challenge-Response';

    case AcctSessionId = 'Acct-Session-Id';

    case AcctUniqueId = 'Acct-Unique-Id';

    case NasPortId = 'NAS-Port-Id';

    case NasPortType = 'NAS-Port-Type';

    case AcctStartTime = 'Acct-Start-Time';

    case AcctUpdateTime = 'Acct-Update-Time';

    case AcctStopTime = 'Acct-Stop-Time';

    case AcctInterval = 'Acct-Interval';

    case AcctSessionTime = 'Acct-Session-Time';

    case AcctAuthentic = 'Acct-Authentic';

    case AcctInputOctets = 'Acct-Input-Octets';

    case AcctOutputOctets = 'Acct-Output-Octets';

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
     * More information: https://www.gnu.org/software/radius/manual/html_node/NAS_002dIP_002dAddress.html
     */
    case NasIpAddress = 'NAS-IP-Address';
}
