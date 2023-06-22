<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'nama'      => 'superadmin',
            'username'  => 'superadmin',
            'email'     => 'superadmin@gmail.com',
            'role'      => 'masterdata',
            'password'  => password_hash('superadmin', PASSWORD_DEFAULT),
        ];
        $this->db->table('users')->insert($data);
    }
}
