<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class KTP extends Migration
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
            'tgl' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'userid' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'keperluan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'kk' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'surat' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true
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
        $this->forge->createTable('ktp');
    }

    public function down()
    {
        $this->forge->dropTable('ktp');
    }
}
