<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;
use IctSolutions\CodeIgniterFreeRadius\Enums\RadpostauthReply;

/**
 * Class Radpostauth
 *
 * @property string $authdate
 * @property int    $id
 * @property string $pass
 * @property string $reply
 * @property string $username
 */
class Radpostauth extends Entity
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

    public function getReply(): string
    {
        return RadpostauthReply::from($this->attributes['reply'])->toString();
    }
}
