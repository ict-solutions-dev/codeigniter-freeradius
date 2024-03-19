<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use IctSolutions\CodeIgniterFreeRadius\Entities\Radpostauth;
use IctSolutions\CodeIgniterFreeRadius\Traits\Sharable;

class RadpostauthModel extends BaseModel
{
    use Sharable;

    protected $primaryKey    = 'id';
    protected $returnType    = Radpostauth::class;
    protected $allowedFields = [
        'username',
        'pass',
        'reply',
        'authdate',
    ];
    protected $useTimestamps      = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected function initialize(): void
    {
        parent::initialize();

        $this->table = $this->tables['radpostauth'];
    }
}
