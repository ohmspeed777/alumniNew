<?php

namespace App\Controllers;

use App\Models\Alumni;
use App\Models\Major;
use App\Models\Working;

class AuthController extends BaseController
{

  public $userModel;
  public $major;

  public function __construct()
  { 
    $userModel = new Alumni();
    $major = new Major();
    // $session = session();
  }

  public function renderRegister(){
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
      $working = new Working();
      $data = [
        'aln_id' => $this->request->getVar('aln_id'),
        'firstName' => $this->request->getVar('firstName'),
        'lastName' => $this->request->getVar('lastName'),
        'qualification' => $this->request->getVar('qualification'),
        'major' => $this->request->getVar('major'),
        'faculty' => $this->request->getVar('faculty'),
        'inYear' => $this->request->getVar('inYear'),
        'outYear' => $this->request->getVar('outYear'),
        'email' => $this->request->getVar('email'),
        'facebook' => $this->request->getVar('facebook'),
        'twitter' => $this->request->getVar('twitter'),
        'line' => $this->request->getVar('line'),
        'img' => 'default.jpg',
        'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
      ];

      $education = [
        'work_id' => '',
        'position' => $this->request->getVar('position'),
        'job' => $this->request->getVar('job'),
        'address' => $this->request->getVar('address'),
        'district' => $this->request->getVar('district'),
        'province' => $this->request->getVar('province'),
        'zipcode' => $this->request->getVar('zipcode'),
        'tel' => $this->request->getVar('tel'),
        'place' => $this->request->getVar('place'),
        'aln_id' => $data['aln_id'],
      ];

      $working->insert($education);
      $userModel->insert($data);

      $data2 = [
        'msg' => 'go to Login',
        'fullMsg' => 'Successfully register, You can login right now!',
        'target' => '/login'
      ];
      return view('success', $data2);

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
        $data2 = [
          'msg' => 'Go to Home Page',
          'fullMsg' => 'Successfully login, You can visit all page right now!',
          'target' => '/index'
        ];
        return view('success', $data2);
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
