<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'students';
  protected $primaryKey = 'stu_id';
  protected $allowedFields = ['stu_id', 'firstName', 'lastName', 'email', 'password', 'gender', 'province', 'class', 'tel',  'facebook', 'line', 'inYear', 'outYear',  'avgGrade', 'major', 'faculty'];

  public function getProfile() {

     $query = $this->db->table('students')
    ->join('major_table', 'students.major = major_table.major_id', 'LEFT')
    ->join('faculty_table', 'students.faculty = faculty_table.fac_id', 'LEFT')
    ->select('faculty_table.fac_name')
    ->select('major_table.major_name')
    ->select('student.*')
    ->get(); 
  
    return $query->getResult();
    
  }
}
