<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Entities\Userinfo;
use IctSolutions\CodeIgniterFreeRadius\Traits\Sharable;

class UserinfoModel extends BaseModel
{
    use Sharable;

    protected $primaryKey    = 'id';
    protected $returnType    = Userinfo::class;
    protected $allowedFields = [
        'username',
        'firstname',
        'lastname',
        'company',
        'address',
        'city',
        'netbox_address_id',
        'notes',
        'created_by',
        'updated_by',
    ];
    protected $useTimestamps      = true;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected function initialize(): void
    {
        parent::initialize();

        $this->table = $this->tables['userinfo'];
    }
}
