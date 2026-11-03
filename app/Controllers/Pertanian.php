<?php

namespace App\Controllers;

class Pertanian extends BaseController
{
    public function index()
    {
        return view('frontend/pertanian', [
            'title'  => 'Pertanian — SIPEDES Desa Penganten',
            'active' => 'pertanian',
        ]);
    }
}
