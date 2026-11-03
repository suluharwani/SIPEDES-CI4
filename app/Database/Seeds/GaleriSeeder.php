<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['title' => 'Kantor Desa Penganten', 'image' => 'assets/images/hero-village.svg', 'kategori' => 'desa', 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Kegiatan Gotong Royong', 'image' => 'assets/images/village-2.svg', 'kategori' => 'kegiatan', 'created_at' => date('Y-m-d H:i:s')],
            ['title' => 'Hasil Pertanian', 'image' => 'assets/images/village-1.svg', 'kategori' => 'pertanian', 'created_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('galeri')->insertBatch($data);
    }
}
