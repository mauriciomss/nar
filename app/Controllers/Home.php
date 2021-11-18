<?php

namespace App\Controllers;
use App\Libraries\Gral;
use App\Libraries\PHPMailer_Lib;
use App\Libraries\Contador;
use App\Models\PropiedadesModel;


class Home extends BaseController
{
	private $email;

	// Constructor
	public function __construct()
	{
		$this->email = \Config\Services::email();
	}

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

		// Recogemos los datos del formulario
		$subject = $this->request->getPost('subject');
		$message = $this->request->getPost('message');
		$nombreusuario = $this->request->getPost('name');
		$emailusuario = $this->request->getPost('email');


		// Datos el email destino. Donde irá a parar el formulario
		$this->email->setTo("info@nardesarrollos.com.ar");

		// Email desde el que se envía (el que hemos configurarado en el apartado anterior)
		$this->email->setFrom("web@fuda.com.ar", "Contacto web");

		$this->email->setSubject($subject." - Contacto web");

		// Cuerpo del Email
		$CuerpoMensaje = "";
		$CuerpoMensaje .= "A continuación más detalles:<br><br>";
		$CuerpoMensaje .= "Nombre: ".$nombreusuario."<br>";
		$CuerpoMensaje .= "Email: ".$emailusuario."<br>";
		$CuerpoMensaje .= "Asunto: ".$subject."<br>";
		$CuerpoMensaje .= "Mensaje: ".$message."<br>";
                
		$this->email->setMessage($CuerpoMensaje);

		if ($this->email->send())
		{
			$data = [
				'ok' => true,
				'msg'	=> 'Email enviado correctamente'
			];
		}
		else
		{
			$data = [
				'ok' => false,
				'msg'	=> 'Email No enviado<br />'. $this->email->printDebugger(['headers'])
			];
		}

		//var_dump($data);

		sleep(2);
		return $this->response->setJSON($data);
	}
	

}
