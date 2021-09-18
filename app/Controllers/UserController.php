<?php

namespace App\Controllers;

use App\Models\Alumni;
use App\Models\Faculty;
use App\Models\Major;

class UserController extends BaseController
{

  public function profile()
  {
    $session = session();
    // echo $session->get('name');\
    $userModel = new Alumni();

    // $userModel->join('major_table', 'students.major = major_table.major_id', 'LEFT');
    // $userModel->join('faculty_table', 'students.faculty = faculty_table.fac_id', 'LEFT');
    // $userModel->select('faculty_table.fac_name');
    // $userModel->select('major_table.major_name');
    // $userModel->select('student.*');
    $data = $userModel->find($session->get('aln_id'));
    return view('profile', $data);
  }

  public function renderEditProfile() {
    $session = session();
    $userModel = new Alumni();
    $data = $userModel->find($session->get('aln_id'));

    return view('editProfile', $data);
  }

  public function editProfile() {
    $session = session();
    $data = [
      'firstName' => $this->request->getVar('firstName'),
      'lastName' => $this->request->getVar('lastName'),
      'gender' => $this->request->getVar('gender'),
      'class' => $this->request->getVar('class'),
      'avgGrade' => $this->request->getVar('avgGrade'),
      'major' => $this->request->getVar('major'),
      'faculty' => $this->request->getVar('faculty'),
      'inYear' => $this->request->getVar('inYear'),
      'outYear' => $this->request->getVar('outYear'),
      'province' => $this->request->getVar('province'),
      'tel' => $this->request->getVar('tel'),
      'email' => $this->request->getVar('email'),
      'facebook' => $this->request->getVar('facebook'),
      'line' => $this->request->getVar('line'),
    ];

    $userModel = new Alumni();
    $userModel->update($session->get('aln_id') ,$data);
    return redirect()->to('/profile');
  }


  public function renderSearch() {
    $userModel = new Alumni();
    $majorModel = new Major();
    $data['users'] = $userModel->findAll();
    $data['major'] = $majorModel->findAll();
    return view('search', $data);
  }

  public function viewProfile($id) {
    $userModel = new Alumni();
    $majorModel = new Major();
    $faculty = new Faculty();
    $data['user'] = $userModel->find($id);
    // var_dump($data['user']);
    $data['major'] = $majorModel->findAll();
    $data['faculty'] = $faculty->findAll();

    return view('viewData', $data);
  }

}
