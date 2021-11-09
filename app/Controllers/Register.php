<?php
namespace App\Controllers;
use App\Models\UserModel;

class Register extends BaseController{
	protected $helpers = [];
	protected $db;

	public function index(){
		//include helper form
		helper(['form']);
		$data = [];
		$data['title'] = 'Registro';

		return view('admin/Register', $data);
	}
 
	public function save(){
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'nombre'        => 'required|min_length[3]|max_length[20]',
			'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[usuarios.email]',
			'password'      => 'required|min_length[6]|max_length[200]',
			'confpassword'  => 'matches[password]'
		];
		 
		if($this->validate($rules)){
			$model = new UserModel();
			$data = [
				'nombre'     => $this->request->getVar('nombre'),
				'email'    => $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
			];
			$model->save($data);

			return redirect()->to('/dashboard');
		}else{
			
			$data['validation'] = $this->validator;
			$data['title'] = 'Registro';
			return view('admin/Register', $data);
		}
	}
}
