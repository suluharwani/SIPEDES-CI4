<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Lainnya extends BaseController
{
    public function index()
    {
        $beritaModel = new BeritaModel();
        return view('frontend/lainnya', [
            'title'   => 'Lainnya — SIPEDES Desa Penganten',
            'active'  => 'lainnya',
            'berita'  => $beritaModel->findAll(),
        ]);
    }
}
