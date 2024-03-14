<?php

namespace IctSolutions\CodeIgniterFreeRadius\Enums;

enum Attribute: string
{
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
}
