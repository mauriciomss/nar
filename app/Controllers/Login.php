<?php
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController{
	protected $helpers = [];
	protected $db;

	public function index(){
		helper(['form']);
		$data['title'] = 'Inicio de Sesión';
		return view('admin/Login', $data);
	} 
 
	public function auth(){
		$session 	= session();
		$model 		= new UserModel();
		$email 		= $this->request->getVar('email');
		$password 	= $this->request->getVar('password');
		
		$data 		= $model->where('email', $email)->first();
		
		if($data){
			$pass 			= $data['password'];
			$verify_pass 	= password_verify($password, $pass);
			if($verify_pass){
				$ses_data = [
					'id'        => $data['id'],
					'nombre'    => $data['nombre'],
					'imagen'    => 'dist/img/nofoto.jpg',
					'email'     => $data['email'],
					'sidebar'     => $data['sidebar'],
					'logged_in' => TRUE
				];
				$session->set($ses_data);
				return redirect()->to('/admin/dashboard');
			}else{
				$session->setFlashdata('msg', 'Contraseña incorrecta.');
				return redirect()->to('/login');
			}
		}else{
			$session->setFlashdata('msg', 'Email no encontrado');
			return redirect()->to('/login');
		}

	}
 
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('login');
	}
}
