<?php 

class phpMailerClass
{
    static function Prueba()
    {
	    require("class.phpmailer.php");
	    require("class.smtp.php");
	    
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
	    $mail->SMTPAuth = true;
	    $mail->SMTPSecure = 'ssl';
	    $mail->Port = 465; 
	    $mail->IsHTML(true); 
	    $mail->CharSet = "utf-8";

	    $mail->Host = "a1000201.ferozo.com";  // Dominio alternativo brindado en el email de alta 
	    $mail->Username = "contacto@estudiantedelinterior.com";  // Mi cuenta de correo
	    $mail->Password = "Misiones20";  // Mi contraseña

	    $mail->From = "contacto@estudiantedelinterior.com";  // Mi cuenta de correo // Email desde donde envío el correo.
	    $mail->FromName = "Estudiante del Interior";  // Mi cuenta de correo
	    $mail->AddAddress( "contacto@estudiantedelinterior.com" ); // Esta es la dirección a donde enviamos los datos del formulario
    	
    	$mail->ClearReplyTos();
       	$mail->addReplyTo("mauriciomss@gmail.com");

	    $mail->Subject = "Prueba estudiantedelinterior.com"; // Este es el titulo del email.
	    
	    // Cuerpo del Email
        $CuerpoMensaje = "<html><head></head><body>Mensaje de prueba</body></html>";

	    $mail->Body = $CuerpoMensaje; // Texto del email en formato HTML

	    $mail->SMTPOptions = array(
	        'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false,
	            'allow_self_signed' => true
	        )
	    );

	    $estadoEnvio = $mail->Send();
	    

	    if($estadoEnvio){
	        echo "El correo fue enviado correctamente.";
	    } else {
	        echo "Ocurrió un error inesperado.<br>".$mail->ErrorInfo;
	    }

	    return false;
	}


    static function Contacto($datos)
    {
	    require("class.phpmailer.php");
	    require("class.smtp.php");
	    
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
	    $mail->SMTPAuth = true;
	    $mail->SMTPSecure = 'ssl';
	    $mail->Port = 465; 
	    $mail->IsHTML(true); 
	    $mail->CharSet = "utf-8";

	    $mail->Host = "a1000201.ferozo.com";  // Dominio alternativo brindado en el email de alta 
	    $mail->Username = "contacto@estudiantedelinterior.com";  // Mi cuenta de correo
	    $mail->Password = "Misiones20";  // Mi contraseña

	    $mail->From = "contacto@estudiantedelinterior.com";  // Mi cuenta de correo // Email desde donde envío el correo.
	    $mail->FromName = "Estudiante del Interior";  // Mi cuenta de correo
	    $mail->AddAddress( "contacto@estudiantedelinterior.com" ); // Esta es la dirección a donde enviamos los datos del formulario
    	
    	$mail->ClearReplyTos();
       	$mail->addReplyTo($datos['mail']);

	    $mail->Subject = "Contacto Estudiante del Interior"; // Este es el titulo del email.
	    // Cuerpo del Email
        $CuerpoMensaje = "<html><head></head><body>";
        $CuerpoMensaje .= "Formulario de contacto".$datos['tipo_contacto'];
        $CuerpoMensaje .= "<br/><br/>";
        $CuerpoMensaje .= "Nombre: ".$datos['nombre'];
        $CuerpoMensaje .= "<br/>";
        $CuerpoMensaje .= "E-mail: ".$datos['mail'];
        $CuerpoMensaje .= "<br/>";        
        $CuerpoMensaje .= "Mensaje: ".$datos['mensaje'];
        $CuerpoMensaje .= "</body></html>";


	    $mail->Body = $CuerpoMensaje; // Texto del email en formato HTML

	    $mail->SMTPOptions = array(
	        'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false,
	            'allow_self_signed' => true
	        )
	    );

	    $estadoEnvio = $mail->Send();
	    

	    if($estadoEnvio){
	        //echo "El correo fue enviado correctamente.";
	        $estado = true;
	        $query = "INSERT INTO portal_mailing_log(referencia,referenca_id,enviado,error,created)
	        			VALUES ('contacto',".$datos['id'].",1,'',NOW())";
	    } else {
	        //echo "Ocurrió un error inesperado.<br>".$mail->ErrorInfo;
	        $estado = false;
	        $query = "INSERT INTO portal_mailing_log(referencia,referenca_id,enviado,error,created)
	        			VALUES ('contacto',".$datos['id'].",0,'".$mail->ErrorInfo."',NOW())";
	        //Habilitar el Acceso de apps menos seguras : https://myaccount.google.com/u/1/lesssecureapps?pageId=none
	    }
        $Base= ObtenerConexion::Conectar('base');
        $stmt = $Base->query( $query );

        return $estado;
	}

    static function Enviar($plantilla, $datos)
    {
	    require("class.phpmailer.php");
	    require("class.smtp.php");
	    
	    $mail = new PHPMailer();
	    $mail->IsSMTP();
	    $mail->SMTPAuth = true;
	    $mail->SMTPSecure = 'ssl';
	    $mail->Port = 465; 
	    $mail->IsHTML(true); 
	    $mail->CharSet = "utf-8";

        //$mail->Port = 587; 

	    $mail->Host = "a1000201.ferozo.com";  // Dominio alternativo brindado en el email de alta 
	    $mail->Username = "contacto@estudiantedelinterior.com";  // Mi cuenta de correo
	    $mail->Password = "Misiones20";  // Mi contraseña

	    $mail->From = "contacto@estudiantedelinterior.com";  // Mi cuenta de correo // Email desde donde envío el correo.
	    $mail->FromName = "Estudiante del Interior";  // Mi cuenta de correo
	    $mail->AddAddress( $datos["mail"] ); // Esta es la dirección a donde enviamos los datos del formulario



	    if ($plantilla == 'Registro') {
		    $mail->Subject = "Cuenta en Estudiante del Interior"; // Este es el titulo del email.
		    // Cuerpo del Email
            $CuerpoMensaje = "<html><head></head><body>";
            $CuerpoMensaje .= "<a href='https://estudiantedelinterior.com/'><img src='https://estudiantedelinterior.com/images/LogoMail.png' alt='' /></a>";
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "<b>Hola " . $datos["nombre"] . "</b>";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "<b>Bienvenido a Estudiante del Interior</b>";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Tu registro se realizó con éxito el ".Gral::getFechaHoraToWEB(Gral::getFechaHoraActual());
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Gracias por registrarte con nosotros. Tu nueva cuenta ha sido configurada y ya puedes iniciar sesión usando los siguientes detalles.";
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "Dirección de E-mail: ".strtolower($datos["mail"]);
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "Contraseña: ".$datos['password'];
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Para iniciar sesión, visita <a href='https://estudiantedelinterior.com/'>estudiantedelinterior.com</a>";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Saludos Cordiales del equipo de Estudiante del Interior.";
            $CuerpoMensaje .= "</body></html>";
	    }




	    if ($plantilla == 'RecuperarPass') {
		    $mail->Subject = "Solicitud de restablecimiento de contraseña Estudiante del Interior"; // Este es el titulo del email.
		    // Cuerpo del Email
            $CuerpoMensaje = "<html><head></head><body>";
            $CuerpoMensaje .= "<a href='http://estudiantedelinterior.com/'><img src='http://estudiantedelinterior.com/images/LogoMail.png' alt='' /></a>";
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "<b>" . $datos['nombre'] . "</b>";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Hemos recibido tu solicitud para recuperar tus datos de ingreso.";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Su dirección de E-mail es: ".$datos['mail'];
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "Y la contraseña es: ".$datos['password'];
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "Para iniciar sesión, <a href='https://estudiantedelinterior.com/login/'>ingresar</a>";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Si no has solicitado este correo electrónico, puede ignorarlo.";
            $CuerpoMensaje .= "<br/>";
            $CuerpoMensaje .= "No se preocupe, su contraseña no será cambiada a menos que usted lo haga con su usuario y contraseña desde el formulario de perfil de usuario.";
            $CuerpoMensaje .= "<br/><br/>";
            $CuerpoMensaje .= "Saludos Cordiales del equipo de Estudiante del Interior.";
            $CuerpoMensaje .= "</body></html>";
	    }





	    $mail->Body = $CuerpoMensaje; // Texto del email en formato HTML

	    $mail->SMTPOptions = array(
	        'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false,
	            'allow_self_signed' => true
	        )
	    );

	    $estadoEnvio = $mail->Send();
	    

	    if($estadoEnvio){
	        //echo "El correo fue enviado correctamente.";
	        $estado = true;
	        $query = "INSERT INTO portal_mailing_log(referencia,referenca_id,enviado,error,created)
	        			VALUES ('".$plantilla."',".$datos['id'].",1,'',NOW())";
	    } else {
	        //echo "Ocurrió un error inesperado.<br>".$mail->ErrorInfo;
	        $estado = false;
	        $query = "INSERT INTO portal_mailing_log(referencia,referenca_id,enviado,error,created)
	        			VALUES ('".$plantilla."',".$datos['id'].",0,'".$mail->ErrorInfo."',NOW())";
	        //Habilitar el Acceso de apps menos seguras : https://myaccount.google.com/u/1/lesssecureapps?pageId=none
	    }
        $Base= ObtenerConexion::Conectar('base');
        $stmt = $Base->query( $query );

        return $estado;
	}

}
?>