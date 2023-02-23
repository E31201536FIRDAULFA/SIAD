<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'nama'      => 'admin',
            'username'  => 'admin',
            'email'     => 'admin@admin',
            'role'      => 'admin',
            'password'  => password_hash('admin', PASSWORD_DEFAULT),
        ];
        $this->db->table('users')->insert($data);
    }
}
