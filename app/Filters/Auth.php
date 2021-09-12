<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    // if use not logged in
    if (!session()->get('isLogin')) {
      return redirect()->to('/login');
    }
    
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Do something
  }
}
