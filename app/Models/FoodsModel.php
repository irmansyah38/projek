<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodsModel extends Model
{
  protected $table      = 'foods';
  protected $primaryKey = 'foods_id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['foods_type', 'foods_title', 'foods_description', 'price'];
  // Dates
}
