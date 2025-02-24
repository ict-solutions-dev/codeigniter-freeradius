<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    protected array $tables = [];
    protected $db;

    public function __construct()
    {
        $this->tables = setting('FreeRadius.tables');

        if (ENVIRONMENT === 'development') {
            $this->DBGroup = setting('FreeRadius.DBGroup');
        }

        $this->db = db_connect(setting('FreeRadius.database'));
        parent::__construct();
    }
}
