<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Nas
 *
 * @property int    $id
 * @property string $nasname
 * @property string $shortname
 * @property string $type
 * @property int    $ports
 * @property string $secret
 * @property string $server
 * @property string $community
 * @property string $description
 */
class Nas extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'          => 'int',
        'nasname'     => 'string',
        'shortname'   => 'string',
        'type'        => 'string',
        'ports'       => 'int',
        'secret'      => 'string',
        'server'      => 'string',
        'community'   => 'string',
        'description' => 'string',
    ];
}
