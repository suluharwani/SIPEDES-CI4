<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['judul' => 'Surat Keterangan Domisili', 'deskripsi' => 'Pengajuan surat keterangan domisili warga', 'kategori' => 'surat', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['judul' => 'Surat Keterangan Usaha', 'deskripsi' => 'Pengajuan surat keterangan usaha', 'kategori' => 'surat', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['judul' => 'Izin Keramaian', 'deskripsi' => 'Pengajuan izin keramaian/acara', 'kategori' => 'izin', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('layanan')->insertBatch($data);
    }
}
