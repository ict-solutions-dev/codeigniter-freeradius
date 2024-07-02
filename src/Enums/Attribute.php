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
            self::NasIpAddress               => lang('FreeRadius.attributeDescription.NASIpAddress'),
            self::CleartextPassword          => lang('FreeRadius.attributeDescription.cleartextPassword'),
            self::FallThrough                => lang('FreeRadius.attributeDescription.fallThrough'),
            self::SimultaneousUse            => lang('FreeRadius.attributeDescription.simultaneousUse'),
            self::ServiceType                => lang('FreeRadius.attributeDescription.serviceType'),
            self::FramedIPAddress            => lang('FreeRadius.attributeDescription.FramedIPAddress'),
            self::FramedIPNetmask            => lang('FreeRadius.attributeDescription.FramedIPNetmask'),
            self::FramedProtocol             => lang('FreeRadius.attributeDescription.FramedProtocol'),
            self::FramedMTU                  => lang('FreeRadius.attributeDescription.FramedMTU'),
            self::CiscoAVPair                => lang('FreeRadius.attributeDescription.ciscoAVPair'),
            self::CiscoNASPort               => lang('FreeRadius.attributeDescription.ciscoNASPort'),
            self::CiscoFramedRoute           => lang('FreeRadius.attributeDescription.ciscoFramedRoute'),
            self::AcctAuthentic              => lang('FreeRadius.attributeDescription.AcctAuthentic'),
            self::AcctTerminateCause         => lang('FreeRadius.attributeDescription.AcctTerminateCause'),
            self::AcctOutputOctets           => lang('FreeRadius.attributeDescription.AcctOutputOctets'),
            self::AcctInterval               => lang('FreeRadius.attributeDescription.AcctInterval'),
            self::AcctSessionId              => lang('FreeRadius.attributeDescription.AcctSessionId'),
            self::AcctUniqueId               => lang('FreeRadius.attributeDescription.AcctUniqueId'),
            self::AcctStartTime              => lang('FreeRadius.attributeDescription.AcctStartTime'),
            self::AcctUpdateTime             => lang('FreeRadius.attributeDescription.AcctUpdateTime'),
            self::AcctStopTime               => lang('FreeRadius.attributeDescription.AcctStopTime'),
            self::AcctSessionTime            => lang('FreeRadius.attributeDescription.AcctSessionTime'),
            self::NasPortId                  => lang('FreeRadius.attributeDescription.NASPortId'),
            self::NasPortType                => lang('FreeRadius.attributeDescription.NasPortType'),
            self::AcctInputOctets            => lang('FreeRadius.attributeDescription.AcctInputOctets'),
            self::UserPassword               => lang('FreeRadius.attributeDescription.UserPassword'),
            self::UserName                   => lang('FreeRadius.attributeDescription.UserName'),
            self::TunnelType                 => lang('FreeRadius.attributeDescription.TunnelType'),
            self::TunnelReject               => lang('FreeRadius.attributeDescription.TunnelReject'),
            self::TunnelStop                 => lang('FreeRadius.attributeDescription.TunnelStop'),
            self::TunnelStart                => lang('FreeRadius.attributeDescription.TunnelStart'),
            self::TunnelServerEndpoint       => lang('FreeRadius.attributeDescription.TunnelServerEndpoint'),
            self::TunnelServerAuthID         => lang('FreeRadius.attributeDescription.TunnelServerAuthID'),
            self::TunnelPrivateGroupID       => lang('FreeRadius.attributeDescription.TunnelPrivateGroupID'),
            self::TunnelPreference           => lang('FreeRadius.attributeDescription.TunnelPreference'),
            self::TunnelPassword             => lang('FreeRadius.attributeDescription.TunnelPassword'),
            self::TunnelMediumType           => lang('FreeRadius.attributeDescription.TunnelMediumType'),
            self::TunnelLinkStop             => lang('FreeRadius.attributeDescription.TunnelLinkStop'),
            self::TunnelLinkStart            => lang('FreeRadius.attributeDescription.TunnelLinkStart'),
            self::TunnelLinkReject           => lang('FreeRadius.attributeDescription.TunnelLinkReject'),
            self::TunnelClientEndpoint       => lang('FreeRadius.attributeDescription.TunnelClientEndpoint'),
            self::TunnelClientAuthID         => lang('FreeRadius.attributeDescription.TunnelClientAuthID'),
            self::TunnelAssignmentID         => lang('FreeRadius.attributeDescription.TunnelAssignmentID'),
            self::TerminationAction          => lang('FreeRadius.attributeDescription.TerminationAction'),
            self::StatefulIPv6AddressPool    => lang('FreeRadius.attributeDescription.StatefulIPv6AddressPool'),
            self::State                      => lang('FreeRadius.attributeDescription.State'),
            self::SessionTimeout             => lang('FreeRadius.attributeDescription.SessionTimeout'),
            self::ServiceSelection           => lang('FreeRadius.attributeDescription.ServiceSelection'),
            self::RouteIPv6Information       => lang('FreeRadius.attributeDescription.RouteIPv6Information'),
            self::ReplyMessage               => lang('FreeRadius.attributeDescription.ReplyMessage'),
            self::ProxyState                 => lang('FreeRadius.attributeDescription.ProxyState'),
            self::PortLimit                  => lang('FreeRadius.attributeDescription.PortLimit'),
            self::PasswordRetry              => lang('FreeRadius.attributeDescription.PasswordRetry'),
            self::PKMSSCert                  => lang('FreeRadius.attributeDescription.PKMSSCert'),
            self::PKMSAID                    => lang('FreeRadius.attributeDescription.PKMSAID'),
            self::PKMSADescriptor            => lang('FreeRadius.attributeDescription.PKMSADescriptor'),
            self::PKMCryptosuiteList         => lang('FreeRadius.attributeDescription.PKMCryptosuiteList'),
            self::PKMConfigSettings          => lang('FreeRadius.attributeDescription.PKMConfigSettings'),
            self::PKMCACert                  => lang('FreeRadius.attributeDescription.PKMCACert'),
            self::PKMAUTHKey                 => lang('FreeRadius.attributeDescription.PKMMAKey'),
            self::NASPort                    => lang('FreeRadius.attributeDescription.NASPort'),
            self::NASIdentifier              => lang('FreeRadius.attributeDescription.NASIdentifier'),
            self::NASIPv6Address             => lang('FreeRadius.attributeDescription.NASIPv6Address'),
            self::MobileNodeIdentifier       => lang('FreeRadius.attributeDescription.MobileNodeIdentifier'),
            self::MSARAPChallenge            => lang('FreeRadius.attributeDescription.MSARAPChallenge'),
            self::MSARAPPasswordChangeReason => lang('FreeRadius.attributeDescription.MSARAPPasswordChangeReason'),
            self::MSAcctAuthType             => lang('FreeRadius.attributeDescription.MSAcctAuthType'),
            self::MSAcctEAPType              => lang('FreeRadius.attributeDescription.MSAcctEAPType'),
            self::MSBAPUsage                 => lang('FreeRadius.attributeDescription.MSBAPUsage'),
            self::MSCHAPCPW1                 => lang('FreeRadius.attributeDescription.MSCHAPCPW1'),
            self::MSCHAPCPW2                 => lang('FreeRadius.attributeDescription.MSCHAPCPW2'),
            self::MSCHAPChallenge            => lang('FreeRadius.attributeDescription.MSCHAPChallenge'),
            self::MSCHAPDomain               => lang('FreeRadius.attributeDescription.MSCHAPDomain'),
            self::MSCHAPError                => lang('FreeRadius.attributeDescription.MSCHAPError'),
            self::MSCHAPLMEncPW              => lang('FreeRadius.attributeDescription.MSCHAPLMEncPW'),
            self::MSCHAPMPPEKeys             => lang('FreeRadius.attributeDescription.MSCHAPMPPEKeys'),
            self::MSCHAPNTEncPW              => lang('FreeRadius.attributeDescription.MSCHAPNTEncPW'),
            self::MSCHAPResponse             => lang('FreeRadius.attributeDescription.MSCHAPResponse'),
            self::MSCHAP2CPW                 => lang('FreeRadius.attributeDescription.MSCHAP2CPW'),
            self::MSCHAP2Response            => lang('FreeRadius.attributeDescription.MSCHAP2Response'),
            self::MSCHAP2Success             => lang('FreeRadius.attributeDescription.MSCHAP2Success'),
            self::MSFilter                   => lang('FreeRadius.attributeDescription.MSFilter'),
            self::MSLinkDropTimeLimit        => lang('FreeRadius.attributeDescription.MSLinkDropTimeLimit'),
            self::MSLinkUtilizationThreshold => lang('FreeRadius.attributeDescription.MSLinkUtilizationThreshold'),
            self::MSMPPEEncryptionPolicy     => lang('FreeRadius.attributeDescription.MSMPPEEncryptionPolicy'),
            self::MSMPPEEncryptionTypes      => lang('FreeRadius.attributeDescription.MSMPPEEncryptionTypes'),
            self::MSMPPERecvKey              => lang('FreeRadius.attributeDescription.MSMPPERecvKey'),
            self::MSMPPESendKey              => lang('FreeRadius.attributeDescription.MSMPPESendKey'),
            self::MSNewARAPPassword          => lang('FreeRadius.attributeDescription.MSNewARAPPassword'),
            self::MSOldARAPPassword          => lang('FreeRadius.attributeDescription.MSOldARAPPassword'),
            self::MSPrimaryDNSServer         => lang('FreeRadius.attributeDescription.MSPrimaryDNSServer'),
            self::MSPrimaryNBNSServer        => lang('FreeRadius.attributeDescription.MSPrimaryNBNSServer'),
            self::MSRASVendor                => lang('FreeRadius.attributeDescription.MSRASVendor'),
            self::MSRASVersion               => lang('FreeRadius.attributeDescription.MSRASVersion'),
            self::MSSecondaryDNSServer       => lang('FreeRadius.attributeDescription.MSSecondaryDNSServer'),
            self::MSSecondaryNBNSServer      => lang('FreeRadius.attributeDescription.MSSecondaryNBNSServer'),
            self::LongExtendedType2          => lang('FreeRadius.attributeDescription.LongExtendedType2'),
            self::LongExtendedType1          => lang('FreeRadius.attributeDescription.LongExtendedType1'),
            self::LoginTCPPort               => lang('FreeRadius.attributeDescription.LoginTCPPort'),
            self::LoginService               => lang('FreeRadius.attributeDescription.LoginService'),
            self::LoginLATService            => lang('FreeRadius.attributeDescription.LoginLATService'),
            self::LoginLATPort               => lang('FreeRadius.attributeDescription.LoginLATPort'),
            self::LoginLATNode               => lang('FreeRadius.attributeDescription.LoginLATNode'),
            self::LoginLATGroup              => lang('FreeRadius.attributeDescription.LoginLATGroup'),
            self::LoginIPv6Host              => lang('FreeRadius.attributeDescription.LoginIPv6Host'),
            self::LoginIPHost                => lang('FreeRadius.attributeDescription.LoginIPHost'),
            self::IdleTimeout                => lang('FreeRadius.attributeDescription.IdleTimeout'),
            self::FramedRouting              => lang('FreeRadius.attributeDescription.FramedRouting'),
            self::FramedRoute                => lang('FreeRadius.attributeDescription.FramedRoute'),
            self::FramedPool                 => lang('FreeRadius.attributeDescription.FramedPool'),
            self::FramedManagementProtocol   => lang('FreeRadius.attributeDescription.FramedManagementProtocol'),
            self::FramedInterfaceId          => lang('FreeRadius.attributeDescription.FramedInterfaceId'),
            self::FramedIPv6Route            => lang('FreeRadius.attributeDescription.FramedIPv6Route'),
            self::FramedIPv6Prefix           => lang('FreeRadius.attributeDescription.FramedIPv6Prefix'),
            self::FramedIPv6Pool             => lang('FreeRadius.attributeDescription.FramedIPv6Pool'),
            self::FramedIPv6Address          => lang('FreeRadius.attributeDescription.FramedIPv6Address'),
            self::FramedIPXNetwork           => lang('FreeRadius.attributeDescription.FramedIPXNetwork'),
            self::FramedCompression          => lang('FreeRadius.attributeDescription.FramedCompression'),
            self::FramedAppleTalkZone        => lang('FreeRadius.attributeDescription.FramedAppleTalkZone'),
            self::FramedAppleTalkNetwork     => lang('FreeRadius.attributeDescription.FramedAppleTalkNetwork'),
            self::FramedAppleTalkLink        => lang('FreeRadius.attributeDescription.FramedAppleTalkLink'),
            self::FilterId                   => lang('FreeRadius.attributeDescription.FilterId'),
            self::FilterID                   => lang('FreeRadius.attributeDescription.FilterID'),
            self::ExtendedVendorSpecific6    => lang('FreeRadius.attributeDescription.ExtendedVendorSpecific6'),
            self::ExtendedVendorSpecific5    => lang('FreeRadius.attributeDescription.ExtendedVendorSpecific5'),
            self::ExtendedVendorSpecific4    => lang('FreeRadius.attributeDescription.ExtendedVendorSpecific4'),
            self::ExtendedVendorSpecific3    => lang('FreeRadius.attributeDescription.ExtendedVendorSpecific3'),
            self::ExtendedVendorSpecific2    => lang('FreeRadius.attributeDescription.ExtendedVendorSpecific2'),
            self::ExtendedVendorSpecific1    => lang('FreeRadius.attributeDescription.ExtendedVendorSpecific1'),
            self::ExtendedType4              => lang('FreeRadius.attributeDescription.ExtendedType4'),
            self::ExtendedType3              => lang('FreeRadius.attributeDescription.ExtendedType3'),
            self::ExtendedType2              => lang('FreeRadius.attributeDescription.ExtendedType2'),
            self::ExtendedType1              => lang('FreeRadius.attributeDescription.ExtendedType1'),
            self::EventTimestamp             => lang('FreeRadius.attributeDescription.EventTimestamp'),
            self::ErrorCause                 => lang('FreeRadius.attributeDescription.ErrorCause'),
            self::EAPMessage                 => lang('FreeRadius.attributeDescription.EAPMessage'),
            self::DelegatedIPv6PrefixPool    => lang('FreeRadius.attributeDescription.DelegatedIPv6PrefixPool'),
            self::DSLiteTunnelName           => lang('FreeRadius.attributeDescription.DSLiteTunnelName'),
            self::DNSServerIPv6Address       => lang('FreeRadius.attributeDescription.DNSServerIPv6Address'),
            self::ConnectInfo                => lang('FreeRadius.attributeDescription.ConnectInfo'),
            self::ConfigurationToken         => lang('FreeRadius.attributeDescription.ConfigurationToken'),
            self::_Class                     => lang('FreeRadius.attributeDescription.Class'),
            self::ChargeableUserIdentity     => lang('FreeRadius.attributeDescription.ChargeableUserIdentity'),
            self::CallingStationId           => lang('FreeRadius.attributeDescription.CallingStationId'),
            self::CalledStationId            => lang('FreeRadius.attributeDescription.CalledStationId'),
            self::CallbackNumber             => lang('FreeRadius.attributeDescription.CallbackNumber'),
            self::CallbackId                 => lang('FreeRadius.attributeDescription.CallbackId'),
            self::CHAPPassword               => lang('FreeRadius.attributeDescription.CHAPPassword'),
            self::CHAPChallenge              => lang('FreeRadius.attributeDescription.CHAPChallenge'),
            self::AcctDelayTime              => lang('FreeRadius.attributeDescription.AcctDelayTime'),
            self::AccountingResponse         => lang('FreeRadius.attributeDescription.AccountingResponse'),
            self::AccountingRequest          => lang('FreeRadius.attributeDescription.AccountingRequest'),
            self::AccessRequest              => lang('FreeRadius.attributeDescription.AccessRequest'),
            self::AccessReject               => lang('FreeRadius.attributeDescription.AccessReject'),
            self::AccessChallenge            => lang('FreeRadius.attributeDescription.AccessChallenge'),
            self::AccessAccept               => lang('FreeRadius.attributeDescription.AccessAccept'),
            self::ARAPZoneAccess             => lang('FreeRadius.attributeDescription.ARAPZoneAccess'),
            self::ARAPSecurityData           => lang('FreeRadius.attributeDescription.ARAPSecurityData'),
            self::ARAPSecurity               => lang('FreeRadius.attributeDescription.ARAPSecurity'),
            self::ARAPPassword               => lang('FreeRadius.attributeDescription.ARAPPassword'),
            self::ARAPFeatures               => lang('FreeRadius.attributeDescription.ARAPFeatures'),
            self::ARAPChallengeResponse      => lang('FreeRadius.attributeDescription.ARAPChallengeResponse'),
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
