<?php

namespace App\Controllers;

class Usuario extends BaseController
{
    public function index()
    {
      $data = ['user' => 2];
      echo view('header_view');
      echo view('ingresar_usuario', $data);
      echo view('footer_view');
    }

    public function ingresar_vista($tipo_usuario){
      $data = ['user' => $tipo_usuario];
      echo view('header_view');
      echo view('ingresar_usuario', $data);
      echo view('footer_view');
    }

    public function ingresarUsuario(){
      
    }
}
