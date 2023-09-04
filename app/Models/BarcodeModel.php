<?php

namespace App\Models;

use CodeIgniter\Model;

class BarcodeModel extends Model
{
  protected $table      = 'barcode';
  protected $primaryKey = 'id_barcode';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['barcode_image', 'id', 'id_barcode', 'jumlah_orang'];

  // Dates
  protected $useTimestamps = true;
}
