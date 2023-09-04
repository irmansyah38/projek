<?php

namespace App\Controllers;

use Myth\Auth\Entities\User;

class Home extends BaseController
{

    public function index()
    {
        return view('home/index');
    }

    public function makananMinuman()
    {
        return view('home/makanan-minuman');
    }
}
