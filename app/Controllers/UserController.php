<?php

namespace App\Controllers;

use App\Models\Alumni;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Working;
use App\Models\Education;

class UserController extends BaseController
{

  public function profile()
  {
    $session = session();
    // echo $session->get('name');\
    $userModel = new Alumni();
    $majorModel = new Major();
    $faculty = new Faculty();
    $education = new Education();
    $working = new Working();

    $data = $userModel->find($session->get('aln_id'));
    $data['maj'] = $majorModel->findAll();
    $data['fac'] = $faculty->findAll();
    $data['education'] = $education->findAll();
    $data['working'] = $working->where('aln_id', session()->get('aln_id'))->first();
    return view('profile', $data);
  }

  public function renderEditProfile()
  {
    $session = session();
    $userModel = new Alumni();
    $majorModel = new Major();
    $faculty = new Faculty();
    $education = new Education();
    $working = new Working();

    $data = $userModel->find($session->get('aln_id'));
    $data['maj'] = $majorModel->findAll();
    $data['fac'] = $faculty->findAll();
    $data['education'] = $education->findAll();
    $data['working'] = $working->where('aln_id', session()->get('aln_id'))->first();

    return view('editProfile', $data);
  }

  public function editProfile()
  {
    $session = session();
    $data = [
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
    ];

    $education = [
      'position' => $this->request->getVar('position'),
      'job' => $this->request->getVar('job'),
      'address' => $this->request->getVar('address'),
      'district' => $this->request->getVar('district'),
      'province' => $this->request->getVar('province'),
      'zipcode' => $this->request->getVar('zipcode'),
      'tel' => $this->request->getVar('tel'),
      'place' => $this->request->getVar('place'),
    ];

    $userModel = new Alumni();
    $working = new Working();

    $userModel->update($session->get('aln_id'), $data);
    $working
      ->where('aln_id', $session->get('aln_id'))
      ->set($education)
      ->update();

    $data2 = [
      'msg' => 'Go to Profile',
      'fullMsg' => 'Successfully Edit your data, You can move to profile right now.',
      'target' => '/profile'
    ];
    return view('success', $data2);
  }


  public function renderSearch()
  {
    $userModel = new Alumni();
    $majorModel = new Major();
    $data['users'] = $userModel->findAll();
    $data['major'] = $majorModel->findAll();
    return view('search', $data);
  }

  public function viewProfile($id)
  {
    $userModel = new Alumni();
    $majorModel = new Major();
    $faculty = new Faculty();
    $working = new Working();
    $data['user'] = $userModel->find($id);


    $data['major'] = $majorModel->findAll();
    $data['faculty'] = $faculty->findAll();
    $data['working'] = $working->where('aln_id', session()->get('aln_id'))->first();

    return view('viewData', $data);
  }

  public function uploadImg()
  {
    $file = $this->request->getFile('img');
    $ext = $file->getExtension();
    if ($file->isValid()) {
      $file->move('./image/users', session()->get('aln_id') . '.' . $ext);
    }

    $user = new Alumni();
    $path = session()->get('aln_id') . '.' . $ext;
    $data = [
      'img' => $path
    ];

    $user->update(session()->get('aln_id'), $data);
    return redirect()->to('profile');
  }
}
