<?php

namespace App\Models;

use CodeIgniter\Model;

class Alumni extends Model
{
  protected $table = 'alumni_table';
  protected $primaryKey = 'aln_id';
  protected $allowedFields = ['aln_id', 'img','firstName', 'lastName', 'qualification', 'major', 'faculty', 'facebook', 'twitter', 'line', 'email', 'password', 'inYear', 'outYear'];

  // public function getProfile()
  // {

  //   $query = $this->db->table('students')
  //     ->join('major_table', 'students.major = major_table.major_id', 'LEFT')
  //     ->join('faculty_table', 'students.faculty = faculty_table.fac_id', 'LEFT')
  //     ->select('faculty_table.fac_name')
  //     ->select('major_table.major_name')
  //     ->select('student.*')
  //     ->get();

  //   return $query->getResult();
  // }
}
