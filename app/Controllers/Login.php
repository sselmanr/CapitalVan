<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ServiceModel;

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
		$service_model = new ServiceModel();

		$user_username = $this->request->getVar('user_username');
		$password = $this->request->getVar('pass');

		$data = $user_model->where("user_username", $user_username)->first();
		$data2 = $service_model->first();

		if ($data) {
			if (md5($password) === $data['user_pass']) {
				$sess_data = [
					'id_user' 				=> $data['id_user'],
					'id_service'			=> $data2['id_service'],
					'id_user_type' 		=> $data['id_user_type'],
					'user_username' 	=> $data['user_username'],
					'user_name' 			=> $data['user_name'],
					'user_lastname' 	=> $data['user_lastname'],
					'user_email' 			=> $data['user_email'],
					'user_phone' 			=> $data['user_phone'],
					'user_rut' 				=> $data['user_rut'],
					'user_created_at' => $data['user_created_at'],
					'isLoggedIn' 			=> TRUE,
					'session' 				=> $session,
				];
				$session->set($sess_data);
				
				return redirect('home');
				
			} else {
				$session->setFlashdata('msg', 'Usuario o contraseña incorrectos');
				echo view('login_view');
			}
		} else {
			$session->setFlashdata('msg', 'Usuario o contraseña incorrectos');
			echo view('login_view');
		}
	}

	public function logout(){
		session()->destroy();
    echo view("login_view");
	}
}