<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class SKTM extends Migration
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
            'nik' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'ttl' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'stswarga' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'nama_ayah' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'ttlayah' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'pekerjaan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'alamatayah' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'gaji' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'keperluan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'suratsktm' => [
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
        $this->forge->createTable('sktm');
    }

    public function down()
    {
        $this->forge->dropTable('sktm');
    }
}
