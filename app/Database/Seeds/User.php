<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'user',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Farel Hafiz Mustafa',
            'email' => 'farelhafiz.fhm@gmail.com'
        ];
        $this->db->table('user')->insert($data);
    }
}
