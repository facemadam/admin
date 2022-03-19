<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Signup extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/signup');
        echo view('templates/footer');
    }
}