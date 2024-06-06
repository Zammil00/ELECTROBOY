<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Template/Header');
        echo view('Home');
        echo view('Template/Footer');
    }
}
