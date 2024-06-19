<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

class Radgroupcheck extends Entity
{

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'       => 'int',
        'groupname' => 'string',
        'attribute' => 'string',
        'op'        => 'string',
        'value'     => 'string',
    ];
}

