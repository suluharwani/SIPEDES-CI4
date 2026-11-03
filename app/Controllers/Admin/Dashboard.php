<?php

namespace App\Controllers\Admin;

class Dashboard extends \CodeIgniter\Controller
{
    public function index()
    {
        if (!session()->get('user')) {
            return redirect()->to('/admin/login');
        }
        return view('admin/dashboard');
    }
}
