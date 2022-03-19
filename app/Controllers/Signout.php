<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Signout extends BaseController
{
    public function index()
    {
        redirect('/signout');
    }
}