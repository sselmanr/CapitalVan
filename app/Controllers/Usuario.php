<?php

namespace App\Controllers;
use App\Models\UserModel;

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
      $user_model = new UserModel();

      $type     = $this->request->getPost("id_user_type");
      $username = $this->request->getVar('username');
      $name     = $this->request->getVar('name');
      $lastname = $this->request->getVar('lastname');
      $email    = $this->request->getVar('email');
      $phone    = $this->request->getVar('phone');
      $rut      = $this->request->getVar('rut');
      $pass     = $this->request->getVar('pass');

      $data = [
          'id_user_type'  => $type,
          'user_username' => $username,
          'user_name'     => $name,
          'user_lastname' => $lastname,
          'user_email'    => $email,
          'user_phone'    => $phone,
          'user_rut'      => $rut,
          'user_pass'     => md5($pass),
      ];

      $user_model->insert($data);
      return redirect("home");
    }

    public function listarUsuarios($tipo_usuario){
      $user_model = new UserModel();

      if ($tipo_usuario == 99) {
        $data['usuarios'] = $user_model->orderBy('id_user_type', 'ASC')->findAll();
      } elseif ($tipo_usuario == 1) {
        $data['usuarios'] = $user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      } elseif ($tipo_usuario == 2) {
        $data['usuarios'] = $user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      } elseif ($tipo_usuario == 3) {
        $data['usuarios'] = $user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      } else {
        $data['usuarios'] = $user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      }
      echo view('header_view');
      echo view('usuarios_view', $data);
      echo view('footer_view');
    }

    public function eliminarUsuario($id_user, $tipo_usuario){
      $user_model = new UserModel();

      $user_model->where('id_user', $id_user)->delete();

      if ($tipo_usuario == 99 or $tipo_usuario != 99) {
        $data['usuarios'] = $user_model->findAll();
      } elseif ($tipo_usuario == 1) {
        $data['usuarios'] = $user_model->where('user_type_user', $tipo_usuario);
      } elseif ($tipo_usuario == 2) {
        $data['usuarios'] = $user_model->where('user_type_user', $tipo_usuario);
      } elseif ($tipo_usuario == 3) {
        $data['usuarios'] = $user_model->where('user_type_user', $tipo_usuario);
      } else {
        $data['usuarios'] = $user_model->where('user_type_user', $tipo_usuario);
      }

      echo view('header_view');
      echo view('usuarios_view', $data);
      echo view('footer_view');
    }
    
    public function modificarUsuario(){
      
      
      echo view('header_view');
      echo view('usuarios_view', $data);
      echo view('footer_view');
    }
    
    public function mostrarUsuario($id_user){
      $user_model = new UserModel();
    
      $data['usuario'] = $user_model->where('id_user', $id_user);

      echo view('header_view');
      echo view('modificarUsuario_view', $data);
      echo view('footer_view');
    }
}
