<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Radcheck
 *
 * @property string $authdate
 * @property int    $id
 * @property string $pass
 * @property string $reply
 * @property string $username
 */
class Radcheck extends Entity
{
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'       => 'int',
        'username' => 'string',
        'pass'     => 'string',
        'reply'    => 'string',
        'authdate' => 'string',
    ];
}
