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


		require("lib/phpmailer/class.phpmailer.php");
        require("lib/phpmailer/class.smtp.php");
        require("lib/phpmailer/Config.php");
        
        $mail->Subject = "Contacto desde la Web"; // Este es el titulo del email.
        $mail->AddAddress( 'contacto@planeta-golosinas.com.ar' );

        $mail->AddReplyTo($_POST['email'], $_POST['nombre']);

        $html = file_get_contents('vistas/plantilla000.html');
        $html = str_replace("[nombre]", $_POST['nombre'], $html);
        $html = str_replace("[email]", $_POST['email'], $html);
        $html = str_replace("[mensaje]", $_POST['message'], $html);

        //echo $html; die();

        $mail->msgHTML($html);
        $estadoEnvio = $mail->Send();

		echo json_encode(array( "error" => false ));

		
		$data = [
	        'ok' => true,
			'data' => "sdfsdfsd"
		];

		return $this->response->setJSON($data);
		//response.ok

	}
	

}
