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
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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
            'role' => [
                'type' => 'ENUM("masterdata","warga","pelayanan","pemerintahan","keuangan")',
                'default' => 'warga',
                'null' => false,
            ],
            'jk' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'kawin' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '150'
            ],
            'kewarganegaraan' => [
                'type' => 'VARCHAR',
                'constraint' => '150'
            ],
            'ttl' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
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
