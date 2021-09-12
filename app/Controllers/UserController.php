<?php

namespace App\Controllers;

use App\Models\UserModel;

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
      $userModel = new UserModel();

      $data = [
        'stu_id' => $this->request->getVar('stu_id'),
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

      var_dump($data);

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
    $userModel = new UserModel();

    $stu_id = $this->request->getVar('stu_id');
    $password = $this->request->getVar('password');

    $data = $userModel->where('stu_id', $stu_id)->first();

    if ($data) {
      $hashPass = $data['password'];
      $isCorrect = password_verify($password, $hashPass);
      if ($isCorrect) {
        $ses_data = [
          'stu_id' => $data['id'],
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
}
