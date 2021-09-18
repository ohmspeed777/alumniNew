<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      // $session = session();
      return view('index');
    }

    public function success() {
      return view('success');
    }
}
