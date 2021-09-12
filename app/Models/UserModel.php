<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'students';
  protected $primaryKey = 'stu_id';
  protected $allowedFields = ['stu_id', 'firstName', 'lastName', 'email', 'password', 'gender', 'province', 'class', 'tel',  'facebook', 'line', 'inYear', 'outYear',  'avgGrade', 'major', 'faculty'];
}
