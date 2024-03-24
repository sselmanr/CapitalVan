<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index(): string
	{
		helper(['form']);
		return view('login_view');
	}

	public function login(){
		$session = session();
		$user_model = new UserModel();

		$user_username = $this->request->getVar('user_username');
		$password = $this->request->getVar('pass');

		$data = $user_model->where("user_username", $user_username)->first();
		
		if ($data) {
			$pass = $data['user_pass'];

			if (md5($password) === $pass) {
				$sess_data = [
					'id_user' => $data['id_user'],
					'id_user_type' => $data['id_user_type'],
					'user_username' => $data['user_username'],
					'user_name' => $data['user_name'],
					'user_lastname' => $data['user_lastname'],
					'user_email' => $data['user_email'],
					'user_phone' => $data['user_phone'],
					'user_rut' => $data['user_rut'],
					'user_created_at' => $data['user_created_at'],
					'isLoggedIn' => TRUE,
					'session' => $session,
				];
				$session->set($sess_data);
				
				return redirect('home');
				
			} else {
				$session->setFlashdata('msg', 'Usuario o contraseña incorrectos');
				echo "password mala";
				echo view('login_view');
			}
		} else {
			$session->setFlashdata('msg', 'Usuario o contraseña incorrectos');
			echo view('login_view');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
    redirect('default_controller');
	}

	/* public function store(){
		helper(['form']);
		$rules = [
			'name'			=> 'required|min_length[2]|max_length[50]',
			'password'	=> 'required|min_length[4]|max_length[50]',
		];	

		if ($this->validate($rules)) {
			$userModel = new UserModel();
			$data = [
				'id_user'					=> $this->request->gerVar('id_user'),
				'id_user_type'		=> $this->request->gerVar('id_user_type'),
				'user_name'				=> $this->request->gerVar('user_name'),
				'user_lastname'		=> $this->request->gerVar('user_lastname'),
				'user_rut'				=> $this->request->gerVar('user_rut'),
				'user_phone'			=> $this->request->gerVar('user_phone'), 
				'user_created_at' => $this->request->gerVar('user_created_at'),
			];
		}
	} */
}
