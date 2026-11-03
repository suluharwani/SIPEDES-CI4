<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;

class Auth extends \CodeIgniter\Controller
{
    public function login()
    {
        if ($this->request->getMethod() === 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                session()->set('user', $user);
                return redirect()->to('/admin/dashboard');
            }
            return redirect()->back()->with('error', 'Username atau password salah');
        }
        return view('admin/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }
}
