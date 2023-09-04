<?php

namespace App\Controllers;


use Picqer\Barcode\BarcodeGeneratorPNG;
use App\Models\BarcodeModel;
use PragmaRX\Random\Random;

class Buy extends BaseController
{
  protected $barcodeModel;
  protected $random;

  public function __construct()
  {
    $this->random = new Random();
    $this->barcodeModel = new BarcodeModel();
  }

  public function index()
  {
    return view('buy/index');
  }
  public function proses()
  {
    // data - data
    $id_barcode = $this->random->size(5)->get();
    $jumlah_orang = $this->request->getPost('jumlah_orang');
    $id = 1;


    // membuat Barcode
    $generator = new BarcodeGeneratorPNG();
    $barcodeData = $generator->getBarcode("{$id_barcode}", $generator::TYPE_CODE_128);


    // data di samsukan ke variabel data
    $data = [
      'id_barcode' => $id_barcode,
      'barcode_image' => $barcodeData,
      'jumlah_orang' => $jumlah_orang,
      'id' => $id
    ];

    // dimasukan ke databse
    $this->barcodeModel->insert($data);

    // kembali ke home
    return redirect()->to("/");
  }
}
