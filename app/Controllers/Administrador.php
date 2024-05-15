<?php

namespace App\Controllers;

class Administrador extends BaseController
{
    public function index()
    {
      $data = ['user' => 1];
      echo view('header_view');
      echo view('ingresar_usuario', $data);
      echo view('footer_view');
    }
}
