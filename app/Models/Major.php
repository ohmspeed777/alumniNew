<?php

namespace App\Models;

use CodeIgniter\Model;

class Major extends Model
{
  protected $table = 'major_table';
  protected $primaryKey = 'major_id';
  protected $allowedFields = ['major_id', 'major_name'];
}
