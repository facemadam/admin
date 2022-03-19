<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Forgot extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/forgot');
        echo view('templates/footer');
    }
}