<?php

namespace App\Controllers;

class Admin extends BaseController
{
  public function index()
  {
    return view('admin/vw_index');
  }

  public function foods()
  {
    return view('admin/vw_foods');
  }
}
