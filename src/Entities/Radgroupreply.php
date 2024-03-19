<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Radgroupreply
 *
 * @property string $attribute
 * @property string $groupname
 * @property int    $id
 * @property string $op
 * @property string $value
 */
class Radgroupreply extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'        => 'int',
        'groupname' => 'string',
        'attribute' => 'string',
        'op'        => 'string',
        'value'     => 'string',
    ];
}
