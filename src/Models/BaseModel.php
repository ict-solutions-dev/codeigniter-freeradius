<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;
use Config\Database;

class BaseModel extends Model
{
    protected array $tables = [];
    protected $db;

    public function __construct(?ConnectionInterface $db = null, ?ValidationInterface $validation = null)
    {
        $db ??= Database::connect(setting('FreeRadius.database'));

        $this->tables = setting('FreeRadius.tables');

        parent::__construct($db, $validation);
    }
}
