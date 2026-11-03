<?php

namespace App\Controllers;

use App\Models\LayananModel;

class Layanan extends BaseController
{
    public function index()
    {
        $layananModel = new LayananModel();
        return view('frontend/layanan', [
            'title'   => 'Layanan — SIPEDES Desa Penganten',
            'active'  => 'layanan',
            'layanan' => $layananModel->findAll(),
        ]);
    }
}
