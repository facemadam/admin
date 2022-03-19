<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/admin');
        echo view('templates/footer');
    }
}