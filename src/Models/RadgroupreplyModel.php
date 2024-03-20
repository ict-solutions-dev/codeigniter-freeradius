<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Entities\Radgroupreply;

class RadgroupreplyModel extends BaseModel
{
    protected $primaryKey    = 'id';
    protected $returnType    = Radgroupreply::class;
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
