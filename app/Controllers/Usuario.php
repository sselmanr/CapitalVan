<?php

namespace App\Controllers;
use App\Models\UserModel;

class Usuario extends BaseController
{
  protected $user_model;

  public function __construct(){
    $this->user_model = new UserModel();
  }

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

      $this->user_model->insert($data);
      return redirect("home");
    }

    public function listarUsuarios($tipo_usuario){
      if ($tipo_usuario == 99) {
        $data['usuarios'] = $this->user_model->orderBy('user_created_at', 'ASC')->findAll();
      } elseif ($tipo_usuario == 1) {
        $data['usuarios'] = $this->user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      } elseif ($tipo_usuario == 2) {
        $data['usuarios'] = $this->user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      } elseif ($tipo_usuario == 3) {
        $data['usuarios'] = $this->user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      } else {
        $data['usuarios'] = $this->user_model->where('id_user_type', $tipo_usuario)->orderBy('user_created_at', 'ASC')->findAll();
      }
      echo view('header_view');
      echo view('usuarios_view', $data);
      echo view('footer_view');
    }

    public function eliminarUsuario($id_user, $tipo_usuario){
      $this->user_model->where('id_user', $id_user)->delete();

      if ($tipo_usuario == 99 or $tipo_usuario != 99) {
        $data['usuarios'] = $this->user_model->findAll();
      } elseif ($tipo_usuario == 1) {
        $data['usuarios'] = $this->user_model->where('user_type_user', $tipo_usuario);
      } elseif ($tipo_usuario == 2) {
        $data['usuarios'] = $this->user_model->where('user_type_user', $tipo_usuario);
      } elseif ($tipo_usuario == 3) {
        $data['usuarios'] = $this->user_model->where('user_type_user', $tipo_usuario);
      } else {
        $data['usuarios'] = $this->user_model->where('user_type_user', $tipo_usuario);
      }

      echo view('header_view');
      echo view('usuarios_view', $data);
      echo view('footer_view');
    }
    
    public function modificarUsuario(){
      $updatingData = [
        'id_user'         => $this->request->getPost('id_user'),
        'id_user_type'    => $this->request->getPost('id_user_type'),
        'user_name'       => $this->request->getPost('user_name'),
        'user_lastname'   => $this->request->getPost('user_lastname'),
        'user_username'   => $this->request->getPost('user_username'),
        'user_email'      => $this->request->getPost('user_email'),
        'user_phone'      => $this->request->getPost('user_phone'),
        'user_rut'        => $this->request->getPost('user_rut'),
        'user_pass'       => $this->request->getPost('user_pass'),
        'user_created_at' => $this->request->getPost('user_created_at'),
      ];

      print_r($updatingData);

      $this->user_model->update($updatingData['id_user'], $updatingData);

      return $this->listarUsuarios($this->request->getPost('id_user_type'));
    }
    
    public function mostrarUsuario($id_user){
      $data = ['usuario' => $this->user_model->where('id_user', $id_user)->first()];

      echo view('header_view');
      echo view('modificarUsuario_view', $data);
      echo view('footer_view');
    }
}
