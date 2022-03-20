<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('pages/admin/index');
        echo view('templates/footer');
    }

    public function create()
    {
        echo view('templates/header');
        echo view('pages/admin/create');
        echo view('templates/footer');
    }

    public function update()
    {
        echo view('templates/header');
        echo view('pages/admin/update');
        echo view('templates/footer');
    }

    public function _create()
    {
    }

    public function _update()
    {
    }

    public function _read()
    {
    }

    public function _delete()
    {
    }
}