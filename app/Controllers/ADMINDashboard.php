<?php
namespace App\Controllers;
use App\Models\UsersModel;

class ADMINDashboard extends BaseController{

	public function index(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');
		$data['title'] = 'Dashboard';
		return view('admin/Dashboard', $data);
	}
	
}