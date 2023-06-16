<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Operator extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'operator',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'nama_lengkap' => 'Farel Hafiz ',
            'email' => 'farelhafiz.fhm@gmail.com'
        ];
        $this->db->table('operator')->insert($data);
    }
}
