<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/dashboard/index');
        echo view('templates/footer');
    }
}