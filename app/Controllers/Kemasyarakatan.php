<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\KegiatanModel;

class Kemasyarakatan extends BaseController
{
    public function index()
    {
        $kegiatanModel = new KegiatanModel();
        return view('frontend/kemasyarakatan', [
            'title'     => 'Kegiatan Aktif — SIPEDES Desa Penganten',
            'active'    => 'kemasyarakatan',
            'kegiatan'  => $kegiatanModel->findAll(),
        ]);
    }
}
