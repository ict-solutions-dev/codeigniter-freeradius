<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Traits\Sharable;

class RadusergroupModel extends BaseModel
{
    use Sharable;

    protected $primaryKey    = 'id';
    protected $returnType    = 'object';
    protected $allowedFields = [
        'username',
        'groupname',
        'priority',
    ];
    protected $useTimestamps      = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected function initialize(): void
    {
        parent::initialize();

        $this->table = $this->tables['radusergroup'];
    }
}
