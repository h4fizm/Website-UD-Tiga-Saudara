<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilterOperator implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
       
        if (!session()->get('akun_username')) {
            return redirect()->to('operator/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
