<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;
use IctSolutions\CodeIgniterFreeRadius\Config\FreeRadius;

class AlterRadusergroupPrimaryKey extends Migration
{
    private array $tables;

    public function __construct(?Forge $forge = null)
    {
        /** @var FreeRadius $freeRadiusConfig */
        $freeRadiusConfig = config('FreeRadius');

        if ($freeRadiusConfig->DBGroup !== null) {
            $this->DBGroup = $freeRadiusConfig->DBGroup;
        }

        parent::__construct($forge);

        $this->tables = $freeRadiusConfig->tables;
    }

    public function up(): void
    {
        // Table structure for table 'radusergroup'
        if ($this->db->tableExists($this->tables['radusergroup'])) {
            $fields           = $this->db->getFieldData($this->tables['radusergroup']);
            $primaryKeyExists = false;

            foreach ($fields as $field) {
                if ($field->primary_key) {
                    $primaryKeyExists = true;
                    break;
                }
            }

            if (! $primaryKeyExists) {
                $this->forge->addPrimaryKey('id');
            }
        }
    }

    public function down(): void
    {
        if ($this->db->tableExists($this->tables['radusergroup'])) {
            $this->forge->dropKey($this->tables['radusergroup'], 'PRIMARY');
        }
    }
}
