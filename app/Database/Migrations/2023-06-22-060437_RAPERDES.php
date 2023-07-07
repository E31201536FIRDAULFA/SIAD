<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class RAPERDES extends Migration
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
            'no' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tgl' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'jml' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'satuan' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'harga' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'uraian' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'anggaran' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'ket' => [
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
        $this->forge->createTable('raperdes');
    }

    public function down()
    {
        $this->forge->dropTable('raperdes');
    }
}
