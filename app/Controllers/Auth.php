<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        $this->signin();
    }

    public function signin()
    {
        echo view('templates/header');
        echo view('pages/auth/signin');
        echo view('templates/footer');
    }

    public function signup()
    {
        echo view('templates/header');
        echo view('pages/auth/signup');
        echo view('templates/footer');
    }

    public function signout()
    {
        $this->signin();
    }

    public function forgot()
    {
        echo view('templates/header');
        echo view('pages/auth/forgot');
        echo view('templates/footer');
    }
}