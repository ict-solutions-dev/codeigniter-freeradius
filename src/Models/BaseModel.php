<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use CodeIgniter\Model;
use IctSolutions\CodeIgniterFreeRadius\Config\FreeRadius;

class BaseModel extends Model
{
    protected array $tables;
    protected FreeRadius $freeRadiusConfig;

    public function __construct()
    {
        $this->freeRadiusConfig = config(FreeRadius::class);

        if ($this->freeRadiusConfig->DBGroup !== null) {
            $this->DBGroup = $this->freeRadiusConfig->DBGroup;
        }

        parent::__construct();
    }

    protected function initialize(): void
    {
        $this->tables = $this->freeRadiusConfig->tables;
    }
}
