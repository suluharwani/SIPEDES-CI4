<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['title' => 'Musrenbangdes 2027', 'pj' => 'Kepala Desa', 'waktu' => 'Senin, 27 Juli 2026', 'lokasi' => 'Balai Desa Penganten', 'sumber' => 'APBDes', 'status' => 'selesai', 'laporan' => 'Musrenbangdes selesai dilaksanakan', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['title' => 'Posyandu Balita', 'pj' => 'Bidan Desa', 'waktu' => 'Setiap bulan', 'lokasi' => 'Posyandu Dusun 1', 'sumber' => 'Puskesmas', 'status' => 'berjalan', 'laporan' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['title' => 'Karang Taruna Bakti Sosial', 'pj' => 'Ketua Karang Taruna', 'waktu' => 'Minggu, 15 Agustus 2026', 'lokasi' => 'Desa Penganten', 'sumber' => 'Swadaya', 'status' => 'rencana', 'laporan' => null, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ];
        $this->db->table('kegiatan')->insertBatch($data);
    }
}
