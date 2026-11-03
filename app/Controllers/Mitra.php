<?php

namespace App\Controllers;

class Mitra extends BaseController
{
    public function index()
    {
        return view('frontend/mitra', [
            'title'  => 'Mitra — SIPEDES Desa Penganten',
            'active' => 'mitra',
        ]);
    }
}
