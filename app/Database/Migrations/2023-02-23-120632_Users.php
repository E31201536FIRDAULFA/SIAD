<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'role' => [
                'type' => 'ENUM("admin", "pegawai", "pengunjung")',
                'default' => 'pengunjung',
                'null' => false,
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}