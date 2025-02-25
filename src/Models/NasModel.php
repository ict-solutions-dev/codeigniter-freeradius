<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Entities\Nas;

class NasModel extends BaseModel
{
    protected $primaryKey    = 'id';
    protected $returnType    = Nas::class;
    protected $allowedFields = [
        'nasname',
        'shortname',
        'type',
        'ports',
        'secret',
        'server',
        'community',
        'description',
    ];
    protected $useTimestamps      = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected function initialize(): void
    {
        parent::initialize();

        $this->table = $this->tables['nas'];
    }
}
