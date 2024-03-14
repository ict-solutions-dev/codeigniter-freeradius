<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

class RadgroupreplyModel extends BaseModel
{
    protected $primaryKey    = 'id';
    protected $returnType    = 'object';
    protected $allowedFields = [
        'groupname',
        'attribute',
        'op',
        'value',
    ];
    protected $useTimestamps      = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected function initialize(): void
    {
        parent::initialize();

        $this->table = $this->tables['radgroupreply'];
    }
}
