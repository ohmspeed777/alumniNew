<?php

namespace App\Controllers;

use App\Models\Alumni;

class UserController extends BaseController
{
  public function renderRegister()
  {
    return view("register");
  }

  public function register()
  {
    helper(['form']);

    $rules = [
      'password' => 'required|min_length[8]|max_length[255]',
      'confirmPassword' => 'matches[password]',
    ];

    if ($this->validate($rules)) {
      $userModel = new Alumni();

      $data = [
        'aln_id' => $this->request->getVar('stu_id'),
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
        'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
      ];

      $userModel->insert($data);
      return redirect()->to('/login');

    }

    $data['validation'] = $this->validator;
    return view('register', $data);
  }

  public function renderLogin()
  {
    return view('login');
  }

  public function login()
  {
    $session = session();
    $userModel = new Alumni();

    $aln_id = $this->request->getVar('stu_id');
    $password = $this->request->getVar('password');

    $data = $userModel->where('aln_id', $aln_id)->first();

    if ($data) {
      $hashPass = $data['password'];
      $isCorrect = password_verify($password, $hashPass);
      if ($isCorrect) {
        $ses_data = [
          'aln_id' => $data['aln_id'],
          'firstName' => $data['firstName'],
          'isLogin' => true
        ];

        $session->set($ses_data);
        return redirect()->to('/index');
      }
    }

    $session->setFlashdata('msg', 'username or password incorrect');
    return redirect()->to('/login');
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/index');
  }


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
    return view('search');
  }

}
