<?php

declare(strict_types=1);

namespace IctSolutions\CodeIgniterFreeRadius\Database\Migrations;

use CodeIgniter\Database\Forge;
use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;
use IctSolutions\CodeIgniterFreeRadius\Config\FreeRadius;

class CreateRadiusTables extends Migration
{
    private array $tables;
    private readonly array $attributes;

    public function __construct(?Forge $forge = null)
    {
        /** @var FreeRadius $freeRadiusConfig */
        $freeRadiusConfig = config('FreeRadius');

        if ($freeRadiusConfig->DBGroup !== null) {
            $this->DBGroup = $freeRadiusConfig->DBGroup;
        }

        parent::__construct($forge);

        $this->tables     = $freeRadiusConfig->tables;
        $this->attributes = ($this->db->getPlatform() === 'MySQLi') ? ['ENGINE' => 'InnoDB'] : [];
    }

    public function up(): void
    {
        // Table structure for table 'radacct'
        if (! $this->db->tableExists($this->tables['radacct'])) {
            $this->forge->addField([
                'radacctid'           => ['type' => 'BIGINT', 'constraint' => 21, 'unsigned' => true, 'auto_increment' => true],
                'acctsessionid'       => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'acctuniqueid'        => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'username'            => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'groupname'           => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'realm'               => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'nasipaddress'        => ['type' => 'VARCHAR', 'constraint' => 15, 'default' => ''],
                'nasportid'           => ['type' => 'VARCHAR', 'constraint' => 15, 'default' => ''],
                'nasporttype'         => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'acctstarttime'       => ['type' => 'DATETIME', 'null' => true],
                'acctupdatetime'      => ['type' => 'DATETIME', 'null' => true],
                'acctstoptime'        => ['type' => 'DATETIME', 'null' => true],
                'acctinterval'        => ['type' => 'INT', 'constraint' => 12, 'default' => 0],
                'acctsessiontime'     => ['type' => 'INT', 'constraint' => 12, 'default' => 0],
                'acctauthentic'       => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'connectinfo_start'   => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => ''],
                'connectinfo_stop'    => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => ''],
                'acctinputoctets'     => ['type' => 'BIGINT', 'constraint' => 20, 'default' => 0],
                'acctoutputoctets'    => ['type' => 'BIGINT', 'constraint' => 20, 'default' => 0],
                'calledstationid'     => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => ''],
                'callingstationid'    => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => ''],
                'acctterminatecause'  => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'servicetype'         => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'framedprotocol'      => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'framedipaddress'     => ['type' => 'VARCHAR', 'constraint' => 15, 'default' => ''],
                'framedipv6address'   => ['type' => 'VARCHAR', 'constraint' => 45, 'default' => ''],
                'framedipv6prefix'    => ['type' => 'VARCHAR', 'constraint' => 45, 'default' => ''],
                'framedinterfaceid'   => ['type' => 'VARCHAR', 'constraint' => 44, 'default' => ''],
                'delegatedipv6prefix' => ['type' => 'VARCHAR', 'constraint' => 45, 'default' => ''],
            ]);
            $this->forge->addPrimaryKey('radacctid');
            $this->forge->addKey('username');
            $this->forge->addKey('framedipaddress');
            $this->forge->addKey('framedipv6address');
            $this->forge->addKey('framedipv6prefix');
            $this->forge->addKey('framedinterfaceid');
            $this->forge->addKey('delegatedipv6prefix');
            $this->forge->addKey('acctsessionid');
            $this->forge->addKey('acctsessiontime');
            $this->forge->addKey('acctstarttime');
            $this->forge->addKey('acctinterval');
            $this->forge->addKey('acctstoptime');
            $this->forge->addKey('nasipaddress');
            $this->forge->createTable($this->tables['radacct']);
            $this->db->query('CREATE INDEX bulk_close ON radacct (acctstoptime, nasipaddress, acctstarttime)');
        }

        // Table structure for table 'radcheck'
        if (! $this->db->tableExists($this->tables['radcheck'])) {
            $this->forge->addField([
                'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'username'  => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'attribute' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'op'        => ['type' => 'CHAR', 'constraint' => 2, 'default' => '=='],
                'value'     => ['type' => 'VARCHAR', 'constraint' => 253, 'default' => ''],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('username');
            $this->forge->createTable($this->tables['radcheck']);
        }

        // Table structure for table 'radgroupcheck'
        if (! $this->db->tableExists($this->tables['radgroupcheck'])) {
            $this->forge->addField([
                'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'groupname' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'attribute' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'op'        => ['type' => 'CHAR', 'constraint' => 2, 'default' => '=='],
                'value'     => ['type' => 'VARCHAR', 'constraint' => 253, 'default' => ''],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('groupname');
            $this->forge->createTable($this->tables['radgroupcheck']);
        }

        // Table structure for table 'radgroupreply'
        if (! $this->db->tableExists($this->tables['radgroupreply'])) {
            $this->forge->addField([
                'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'groupname' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'attribute' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'op'        => ['type' => 'CHAR', 'constraint' => 2, 'default' => '='],
                'value'     => ['type' => 'VARCHAR', 'constraint' => 253, 'default' => ''],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('groupname');
            $this->forge->createTable($this->tables['radgroupreply']);
        }

        // Table structure for table 'radreply'
        if (! $this->db->tableExists($this->tables['radreply'])) {
            $this->forge->addField([
                'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'username'  => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'attribute' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'op'        => ['type' => 'CHAR', 'constraint' => 2, 'default' => '='],
                'value'     => ['type' => 'VARCHAR', 'constraint' => 253, 'default' => ''],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('username');
            $this->forge->createTable($this->tables['radreply']);
        }

        // Table structure for table 'radusergroup'
        if (! $this->db->tableExists($this->tables['radusergroup'])) {
            $this->forge->addField([
                'username'  => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'groupname' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'priority'  => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 1],
            ]);
            $this->forge->addKey('username');
            $this->forge->createTable($this->tables['radusergroup']);
        }

        // Table structure for table 'radpostauth'
        if (! $this->db->tableExists($this->tables['radpostauth'])) {
            $this->forge->addField([
                'id'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'username' => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'pass'     => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'reply'    => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'authdate' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP')],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('username');
            $this->forge->createTable($this->tables['radpostauth']);
        }

        // Table structure for table 'nas'
        if (! $this->db->tableExists($this->tables['nas'])) {
            $this->forge->addField([
                'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'nasname'     => ['type' => 'VARCHAR', 'constraint' => 128, 'default' => ''],
                'shortname'   => ['type' => 'VARCHAR', 'constraint' => 32, 'default' => ''],
                'type'        => ['type' => 'VARCHAR', 'constraint' => 30, 'default' => 'other'],
                'ports'       => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'default' => 0],
                'secret'      => ['type' => 'VARCHAR', 'constraint' => 60, 'default' => ''],
                'server'      => ['type' => 'VARCHAR', 'constraint' => 64, 'default' => ''],
                'community'   => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => ''],
                'description' => ['type' => 'VARCHAR', 'constraint' => 200, 'default' => ''],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addKey('nasname');
            $this->forge->createTable($this->tables['nas']);
        }

        // Table structure for table 'nasreload'
        if (! $this->db->tableExists($this->tables['nasreload'])) {
            $this->forge->addField([
                'nasipaddress' => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => false],
                'reloadtime'   => ['type' => 'DATETIME', 'null' => false],
            ]);
            $this->forge->addPrimaryKey('nasipaddress');
            $this->forge->createTable($this->tables['nasreload']);
        }

        // Table structure for custom table 'userinfo'
        if (! $this->db->tableExists($this->tables['userinfo'])) {
            $this->forge->addField([
                'id'                => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
                'username'          => ['type' => 'VARCHAR', 'constraint' => 30, 'null' => true],
                'firstname'         => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'lastname'          => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'company'           => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'address'           => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'city'              => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
                'netbox_address_id' => ['type' => 'INT', 'constraint' => 11, 'null' => true],
                'created_by'        => ['type' => 'INT', 'constraint' => 11, 'null' => true],
                'updated_by'        => ['type' => 'INT', 'constraint' => 11, 'null' => true],
                'created_at'        => ['type' => 'DATETIME', 'null' => true],
                'updated_at'        => ['type' => 'DATETIME', 'null' => true],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->addUniqueKey('username');
            $this->createTable($this->tables['userinfo']);
        }
    }

    public function down(): void
    {
        $this->forge->dropTable($this->tables['radacct']);
        $this->forge->dropTable($this->tables['radcheck']);
        $this->forge->dropTable($this->tables['radgroupcheck']);
        $this->forge->dropTable($this->tables['radgroupreply']);
        $this->forge->dropTable($this->tables['radreply']);
        $this->forge->dropTable($this->tables['radusergroup']);
        $this->forge->dropTable($this->tables['radpostauth']);
        $this->forge->dropTable($this->tables['nas'], true);
        $this->forge->dropTable($this->tables['nasreload'], true);
        $this->forge->dropTable($this->tables['userinfo'], true);
    }

    private function createTable(string $tableName): void
    {
        $this->forge->createTable($tableName, true, $this->attributes);
    }
}
