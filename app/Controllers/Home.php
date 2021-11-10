<?php

namespace App\Controllers;
use App\Libraries\Gral;
use App\Libraries\Contador;
use App\Models\PropiedadesModel;


class Home extends BaseController
{

	public function index()
	{
		$Contador = new Contador();
		$data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');
		
        $PropiedadesModel = new PropiedadesModel();
        $data['destacadas'] = $PropiedadesModel->getDestacadas();
		$data['ultimas'] = $PropiedadesModel->getUltimas();

		$data['title'] = 'Inicio';

		return view('Inicio', $data);
	}

	public function contacto()
	{
		$Contador = new Contador();
        $data['Gral'] = new Gral();
        //$Contador->SetVisitas('web');


		$data['title'] = 'Contacto';

		return view('Contacto', $data);
	}

	public function contact()
	{

		helper(['form', 'url']);

		$data = [
	        'ok' => true
		];

		return $this->response->setJSON($data);
		//response.ok

	}
	

}
