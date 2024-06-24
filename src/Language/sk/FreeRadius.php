<?php

return [
    'radpostauthReplies' => [
        'accessAccept' => 'Pristup schválený',
        'accessReject' => 'Pristup zamietnutý',
    ],
    'atrributeDescription' => [
        'nasIpAddress' => 'Tento atribút označuje identifikačnú IP adresu NAS, ktorá žiada o autentifikáciu používateľa, a MALA by byť jedinečná pre NAS v rámci dosahu servera RADIUS. NAS-IP-Adresa sa používa iba v paketoch Access-Request. Buď NAS-IP-Adresa alebo NAS-Identifier MUSÍ byť prítomný v pakete Access-Request. Všimnite si, že NAS-IP-Adresa by NEMALA byť použitá na výber zdieľaného tajomstva použitého na autentifikáciu požiadavky. Zdrojová IP adresa paketu Access-Request MUSÍ byť použitá na výber zdieľaného tajomstva.',
    ],
];
