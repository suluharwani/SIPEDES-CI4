<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['title' => 'Gotong Royong Bersih Desa', 'slug' => 'gotong-royong-bersih-desa', 'category' => 'kegiatan', 'content' => 'Warga desa bergotong royong membersihkan lingkungan desa.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['title' => 'Panen Raya Padi 2026', 'slug' => 'panen-raya-padi-2026', 'category' => 'potensi', 'content' => 'Hasil panen padi tahun ini meningkat 15% dibanding tahun lalu.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['title' => 'Pelayanan Administrasi Desa', 'slug' => 'pelayanan-administrasi-desa', 'category' => 'pelayanan', 'content' => 'Kantor desa kini melayani surat keterangan lebih cepat.', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('berita')->insertBatch($data);
    }
}
