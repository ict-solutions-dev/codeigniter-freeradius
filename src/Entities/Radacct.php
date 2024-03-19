<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Radacct
 *
 * @property string $acctauthentic
 * @property int    $acctinputoctets
 * @property int    $acctinterval
 * @property int    $acctoutputoctets
 * @property string $acctsessionid
 * @property int    $acctsessiontime
 * @property string $acctstarttime
 * @property string $acctstoptime
 * @property string $acctterminatecause
 * @property string $acctuniqueid
 * @property string $acctupdatetime
 * @property string $calledstationid
 * @property string $callingstationid
 * @property string $connectinfo_start
 * @property string $connectinfo_stop
 * @property string $delegatedipv6prefix
 * @property string $framedinterfaceid
 * @property string $framedipaddress
 * @property string $framedipv6address
 * @property string $framedipv6prefix
 * @property string $framedprotocol
 * @property string $groupname
 * @property string $nasipaddress
 * @property string $nasportid
 * @property string $nasporttype
 * @property int    $radacctid
 * @property string $realm
 * @property string $servicetype
 * @property string $username
 */
class Radacct extends Entity
{
    /**
     * @var         list<string>
     * @phpstan-var list<string>
     * @psalm-var   list<string>
     */
    protected $dates = [
        'acctstarttime',
        'acctupdatetime',
        'acctstoptime',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'radacctid'           => 'int',
        'acctsessionid'       => 'string',
        'acctuniqueid'        => 'string',
        'username'            => 'string',
        'groupname'           => 'string',
        'realm'               => 'string',
        'nasipaddress'        => 'string',
        'nasportid'           => 'string',
        'nasporttype'         => 'string',
        'acctinterval'        => 'int',
        'acctsessiontime'     => 'int',
        'acctauthentic'       => 'string',
        'connectinfo_start'   => 'string',
        'connectinfo_stop'    => 'string',
        'acctinputoctets'     => 'int',
        'acctoutputoctets'    => 'int',
        'calledstationid'     => 'string',
        'callingstationid'    => 'string',
        'acctterminatecause'  => 'string',
        'servicetype'         => 'string',
        'framedprotocol'      => 'string',
        'framedipaddress'     => 'string',
        'framedipv6address'   => 'string',
        'framedipv6prefix'    => 'string',
        'framedinterfaceid'   => 'string',
        'delegatedipv6prefix' => 'string',
    ];
}
