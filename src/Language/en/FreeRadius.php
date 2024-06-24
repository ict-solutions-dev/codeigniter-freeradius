<?php

return [
    'radpostauthReplies' => [
        'accessAccept' => 'Access-Accept',
        'accessReject' => 'Access-Reject',
    ],
    'atrributeDescription' => [
        'nasIpAddress' => 'This Attribute indicates the identifying IP Address of the NAS which is requesting authentication of the user, and SHOULD be unique to the NAS within the scope of the RADIUS server. NAS-IP-Address is only used in Access-Request packets.  Either NAS-IP- Address or NAS-Identifier MUST be present in an Access-Request packet. Note that NAS-IP-Address MUST NOT be used to select the shared secret used to authenticate the request.  The source IP address of the Access-Request packet MUST be used to select the shared secret.',
    ],
];
