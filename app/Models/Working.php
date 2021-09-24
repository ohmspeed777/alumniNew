<?php

namespace App\Models;

use CodeIgniter\Model;

class Working extends Model
{
  protected $table = 'working_table';
  protected $primaryKey = 'work_id';
  protected $allowedFields = ['aln_id', 'work_id',  'place', 'position', 'job', 'address', 'district', 'province', 'zipcode', 'tel'];
}
