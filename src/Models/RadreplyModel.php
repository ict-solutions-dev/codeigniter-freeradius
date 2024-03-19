<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Entities\Radreply;
use IctSolutions\CodeIgniterFreeRadius\Traits\Sharable;

class RadreplyModel extends BaseModel
{
    use Sharable;

    protected $primaryKey    = 'id';
    protected $returnType    = Radreply::class;
    protected $allowedFields = [
        'username',
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

        $this->table = $this->tables['radreply'];
    }
}
