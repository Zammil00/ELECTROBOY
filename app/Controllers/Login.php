<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {

        echo view('Template/Header');
        echo view('login');
        echo view('Template/Footer');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Lakukan validasi username dan password
        // Contoh sederhana: jika username dan password sama dengan 'admin'
        if ($username === 'admin' && $password === 'admin') {
            // Autentikasi berhasil, arahkan ke halaman home
            return redirect()->to('/home');
        } else {
            // Autentikasi gagal, tampilkan pesan error
            return redirect()->to('/login')->with('error', 'Username atau password salah');
        }
    }
}
