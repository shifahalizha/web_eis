<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResepSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'namamenu' => 'nasi goreng',
            'caption'    => 'nasi goreng khas madura',
            'bahan'    => 'nasi,ayam, kecap',
            'cara'    => 'goreng nasinya dan masukan ayam',
            'foto'    => 'nasigoreng',
        ];

        // Simple Queries
        $this->db->table('menu')->insert($data);

        $data = [
            'namamenu' => 'puding',
            'caption'    => 'puding lezat',
            'bahan'    => 'roti, gula, susu',
            'cara'    => 'campur semua bahan',
            'foto'    => 'nasigoreng',
        ];

        // Simple Queries
        $this->db->table('menu')->insert($data);
    }
}
