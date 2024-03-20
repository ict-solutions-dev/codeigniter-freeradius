<?php

namespace IctSolutions\CodeIgniterFreeRadius\Entities;

use CodeIgniter\Entity\Entity;

/**
 * Class Userinfo
 *
 * @property string $address
 * @property string $city
 * @property string $company
 * @property string $created_at
 * @property int    $created_by
 * @property string $firstname
 * @property int    $id
 * @property string $lastname
 * @property int    $netbox_address_id
 * @property string $updated_at
 * @property int    $updated_by
 * @property string $username
 */
class Userinfo extends Entity
{
    /**
     * @var         list<string>
     * @phpstan-var list<string>
     * @psalm-var   list<string>
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'                => 'int',
        'username'          => 'string',
        'firstname'         => 'string',
        'lastname'          => 'string',
        'company'           => 'string',
        'address'           => 'string',
        'city'              => 'string',
        'netbox_address_id' => 'int',
        'created_by'        => 'int',
        'updated_by'        => 'int',
    ];
}
