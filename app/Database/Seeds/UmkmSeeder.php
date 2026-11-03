<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UmkmSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama' => 'Warung Makan Bu Siti', 'deskripsi' => 'Menyediakan makanan tradisional Jawa', 'kontak' => '0812-3456-7890', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nama' => 'Kerajinan Bambu Pak Joko', 'deskripsi' => 'Produksi kerajinan tangan dari bambu', 'kontak' => '0813-4567-8901', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['nama' => 'Toko Sembako Desa', 'deskripsi' => 'Menjual kebutuhan pokok sehari-hari', 'kontak' => '0814-5678-9012', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('umkm')->insertBatch($data);
    }
}
