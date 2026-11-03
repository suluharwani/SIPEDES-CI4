<?php

namespace App\Controllers;

use App\Models\UmkmModel;

class Umkm extends BaseController
{
    public function index()
    {
        $umkmModel = new UmkmModel();
        return view('frontend/umkm', [
            'title'  => 'UMKM — SIPEDES Desa Penganten',
            'active' => 'umkm',
            'umkm'   => $umkmModel->findAll(),
        ]);
    }
}
