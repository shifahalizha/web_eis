<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'shifa',
            'email'    => 'shifa@gmail.com',
            'password'    => 'shifa',
        ];

        // Simple Queries
        $this->db->table('login')->insert($data);
    }
}
