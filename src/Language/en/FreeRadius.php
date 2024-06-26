<?php

return [
    'radpostauthReplies' => [
        'accessAccept' => 'Access-Accept',
        'accessReject' => 'Access-Reject',
    ],
    'atrributeDescription' => [
        'NasIpAddress'      => 'This Attribute indicates the identifying IP Address of the NAS which is requesting authentication of the user, and SHOULD be unique to the NAS within the scope of the RADIUS server. NAS-IP-Address is only used in Access-Request packets.  Either NAS-IP- Address or NAS-Identifier MUST be present in an Access-Request packet. Note that NAS-IP-Address MUST NOT be used to select the shared secret used to authenticate the request.  The source IP address of the Access-Request packet MUST be used to select the shared secret.',
        'CleartextPassword' => '',
        'FallThrough'       => 'The Fall-Through attribute should be used in the reply list. If its value is set to Yes in a particular record, that tells Radius to continue looking up other records even when the record at hand matches the request. It can be used to provide default values for several profiles.',
        'SimultaneousUse'   => 'This attribute specifies the maximum number of simultaneous logins a given user is permitted to have. When the user is logged in this number of times, any further attempts to log in are rejected. ',
        'ServiceType'       => 'This attribute indicates the type of service the user has requested, or the type of service to be provided. It may be used in both Access-Request and Access-Accept packets. When used in an Access-Request the service type represents a hint to the Radius server that the NAS has reason to believe the user would prefer the kind of service indicated. When used in an Access-Accept, the service type is an indication to the NAS that the user must be provided this type of service. ',
        'FramedIPAddress'   => 'This attribute indicates the address to be configured for the user. It may be used in Access-Accept packets. It may be used in an Access-Request packet as a hint by the NAS to the server that it would prefer that address, but the server is not required to honor the hint. The value 0xFFFFFFFF (255.255.255.255) indicates that the NAS should allow the user to select an address. The value 0xFFFFFFFE (255.255.255.254) indicates that the NAS should select an address for the user (e.g. assigned from a pool of addresses kept by the NAS). Other valid values indicate that the NAS should use that value as the user\'s IP. ',
        'FramedIPNetmask'   => 'This attribute indicates the IP netmask to be configured for the user when the user is a router to a network. It may be used in Access-Accept packets. It may be used in an Access-Request packet as a hint by the NAS to the server that it would prefer that netmask, but the server is not required to honor the hint.',
        'FramedProtocol'    => 'This attribute indicates the framing to be used for framed access. It may be used in both Access-Request and Access-Accept packets. ',
        'FramedMTU'         => 'This attribute indicates the maximum transmission unit to be configured for the user, when it is not negotiated by some other means (such as PPP). It is only used in Access-Accept packets.',

        'CiscoAVPair'      => 'Cisco-AVPair allows Vendor-Specific information to be carried in RADIUS packets.',
        'CiscoNASPort'     => 'Indicates the physical port number of the network access server that is authenticating the user. The NAS-Port value (32 bits) consists of one or two 16-bit values (depending on the setting of the radius-server extended-portnames command). Each 16-bit number should be viewed as a 5-digit decimal integer.',
        'CiscoFramedRoute' => 'Provides routing information to be configured for the user on this network access server. The RADIUS RFC format (net/bits [router [metric]]) and the old style dotted mask (net mask [router [metric]]) are supported. If the device field is omitted or 0, the peer IP address is used. Metrics are currently ignored. This attribute is access-request packets.',
        'CiscoServiceInfo' => 'Cisco-Service-Info provides information about the service parameters for Cisco devices.',
    ],
];
