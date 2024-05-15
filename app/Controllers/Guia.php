<?php

namespace App\Controllers;

class Guia extends BaseController
{
    public function index()
    {
      $data = ['user' => 3];
      echo view('header_view');
      echo view('ingresar_usuario', $data);
      echo view('footer_view');
    }
}
