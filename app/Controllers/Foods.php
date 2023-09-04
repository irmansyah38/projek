<?php

namespace App\Controllers;

class Foods extends BaseController
{
  public function index()
  {
    return view('admin/vw_input_foods');
  }
}
