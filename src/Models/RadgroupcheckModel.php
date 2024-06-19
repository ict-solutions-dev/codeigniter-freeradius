<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Entities\Radgroupcheck;
use IctSolutions\CodeIgniterFreeRadius\Traits\Sharable;

class RadgroupcheckModel extends BaseModel
{
    use Sharable;

    protected $primaryKey    = 'id';
    protected $returnType    = Radgroupcheck::class;
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

        $this->table = $this->tables['radgroupcheck'];
    }
}
