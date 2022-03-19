<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Signin extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/signin');
        echo view('templates/footer');
    }
}