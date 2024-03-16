<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        return view('login_view');
    }
    public function login(): string{
        $usuario = $this->request->getPost('username');
        $pass = $this->request->getPost('pass');
        return "";
    }
}
