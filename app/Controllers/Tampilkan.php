<?php

namespace App\Controllers;

use App\Models\BarcodeModel;

class Tampilkan extends BaseController
{
  protected $barcodeModel;

  public function __construct()
  {
    $this->barcodeModel = new BarcodeModel();
  }
  public function index()
  {
    $data = $this->barcodeModel->find(1);
    echo '<img src="data:image/png;base64,' . $data["name"] . '" style="width: 500px;">';
  }
}
