<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/users/index');
        echo view('templates/footer');
    }

    public function detail()
    {
        echo view('templates/header');
        echo view('pages/users/detail');
        echo view('templates/footer');
    }

    public function regist()
    {
        echo view('templates/header');
        echo view('pages/users/regist');
        echo view('templates/footer');
    }
}