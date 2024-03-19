<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Radusergroup
 *
 * @property string $groupname
 * @property int    $priority
 * @property string $username
 */
class Radusergroup extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'username'  => 'string',
        'groupname' => 'string',
        'priority'  => 'int',
    ];
}
