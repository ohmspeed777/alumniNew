<?php

namespace App\Models;

use CodeIgniter\Model;

class Education extends Model
{
  protected $table = 'qualification_table';
  protected $primaryKey = 'quali_id';
  protected $allowedFields = ['quali_id', 'quali_name'];
}
