<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Radreply
 *
 * @property string $attribute
 * @property int    $id
 * @property string $op
 * @property string $username
 * @property string $value
 */
class Radreply extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'        => 'int',
        'username'  => 'string',
        'attribute' => 'string',
        'op'        => 'string',
        'value'     => 'string',
    ];
}
