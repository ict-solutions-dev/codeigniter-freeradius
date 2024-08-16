<?php

return [
    'radpostauthReplies' => [
        'accessAccept' => 'Pristup schválený',
        'accessReject' => 'Pristup zamietnutý',
    ],
    'attributeDescription' => [
        'NASIpAddress'      => 'Tento atribút označuje identifikačnú IP adresu NAS, ktorá žiada autentifikáciu používateľa, a MALA BY byť jedinečná pre NAS v rámci RADIUS servera. NAS-IP-Address sa používa iba v Access-Request paketo. Buď NAS-IP-Address, alebo NAS-Identifier MUSÍ byť prítomný v Access-Request pakete. Upozorňujeme, že NAS-IP-Address NESMIE byť použitá na výber zdieľaného tajomstva používaného na autentifikáciu požiadavky. Na výber zdieľaného tajomstva MUSÍ byť použitá zdrojová IP adresa Access-Request paketu.',
        'cleartextPassword' => 'Špecifikuje používateľské heslo v čistej forme. Tento atribút sa zvyčajne používa počas autentifikačných procesov na overenie identity používateľa.',
        'fallThrough'       => 'Atribút Fall-Through by sa mal používať v zozname odpovedí. Ak je jeho hodnota nastavená na Áno v konkrétnom zázname, znamená to, že Radius bude pokračovať v hľadaní ďalších záznamov, aj keď súčasný záznam zodpovedá požiadavke. Môže sa použiť na poskytovanie predvolených hodnôt pre niekoľko profilov',
        'simultaneousUse'   => 'Tento atribút špecifikuje maximálny počet súčasných prihlásení, ktoré má používateľ povolené. Keď je používateľ prihlásený tento počet krát, všetky ďalšie pokusy o prihlásenie sú zamietnuté,',
        'ciscoAVPair'       => 'CiscoAVPair umožňuje prenos informácií špecifických pre výrobcu v paktoch RADIUS.',
        'ciscoNASPort'      => 'Ukazuje fyzické číslo portu sieťového prístupového servera, ktorý autentizuje používateľa. Hodnota NAS-Port (32 bitov) pozostáva z jedného alebo dvoch 16-bitových čísel (v závislosti od nastavenia príkazu radius-server extended-portnames). Každé 16-bitové číslo by sa malo považovať za 5-ciferné desatinné číslo.',
        'ciscoFramedRoute'  => 'Poskytuje smerovacie informácie na konfiguráciu pre používateľa na tomto sieťovom prístupovom serveri. Podporovaný je formát RFC RADIUS (net/bits [router [metric]]) a starý štýl bodkovanej masky (net mask [router [metric]]). Ak je pole zariadenia vynechané alebo 0, použije sa IP adresa páru. Metódy sa v súčasnosti ignorujú. Tento atribút sa nachádza v Access-Request paketoch.',
        'ciscoServiceInfo'  => 'CiscoServiceInfo poskytuje informácie o parametroch služby pre zariadenia Cisco.',

        'AcctDelayTime'         => 'Tento atribút udáva, koľko sekúnd sa klient snažil odoslať tento záznam, a môže byť odpočítaný od času príchodu na server, aby sa zistil približný čas udalosti, ktorá tento Accounting-Request vygenerovala. (Čas sieťového prenosu sa ignoruje.)',
        'AcctInputGigawords'    => 'Tento atribút udáva, koľkokrát sa čítač Acct-Input-Octets pretočil okolo hodnoty 2^32 počas poskytovania tejto služby a môže byť prítomný iba v záznamoch Accounting-Request, kde je nastavený typ stavu účtovania (Acct-Status-Type) na Stop alebo Interim-Update.',
        'AcctAuthentic'         => 'Tento atribút MÔŽE byť zahrnutý v požiadavke na účtovanie (Accounting-Request), aby naznačil, ako bol používateľ autentifikovaný, či už pomocou RADIUS, samotného NAS, alebo iného vzdialeného autentifikačného protokolu. Používatelia, ktorí dostávajú službu bez autentifikácie, by NEMALI generovať záznamy účtovania.',
        'AcctInputOctets'       => 'Tento atribút označuje počet oktetov, ktoré boli prijaté z portu počas poskytovania tejto služby, a môže sa objaviť iba v záznamoch účtovania (Accounting-Request), kde je typ stavu účtovania (Acct-Status-Type) nastavený na Stop.',
        'AcctInputPackets'      => 'Tento atribút označuje počet paketov, ktoré boli prijaté z portu počas poskytovania tejto služby používateľovi, ktorý je rámcovaný (Framed User), a môže sa objaviť iba v záznamoch účtovania (Accounting-Request), kde je typ stavu účtovania (Acct-Status-Type) nastavený na Stop.',
        'AcctInterimInterval'   => 'Tento atribút označuje počet sekúnd medzi každou medzičasovou aktualizáciou pre túto konkrétnu reláciu. Táto hodnota sa môže objaviť iba v správe Access-Accept.',
        'AcctLinkCount'         => 'Tento atribút uvádza počet odkazov, ktoré sú známe, že boli v daných viaclinkových reláciách v čase vytvorenia účtovacieho záznamu. NAS MÔŽE zahrnúť atribút Acct-Link-Count do akéhokoľvek Accounting-Request, ktorý môže mať viacero odkazov.',
        'AcctMultiSessionId'    => 'Tento atribút je unikátny identifikátor účtovania, ktorý uľahčuje prepojenie viacerých súvisiacich relácií v súboroch s logmi. Každá prepojená relácia bude mať unikátny Acct-Session-Id, ale rovnaký Acct-Multi-Session-Id. Odporúča sa, aby Acct-Multi-Session-Id obsahoval znaky kódované v UTF-8 podľa normy 10646 [7].',
        'AcctOutputOctets'      => 'Tento atribút ukazuje, koľko oktetov bolo odoslaných na port počas poskytovania tejto služby a môže byť prítomný iba v záznamoch Accounting-Request, kde je Acct-Status-Type nastavený na Stop.',



    ],
];
