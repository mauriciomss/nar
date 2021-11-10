<?php 
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 465; 
    $mail->IsHTML(true); 
    $mail->CharSet = "utf-8";
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Host = "c1930517.ferozo.com";  // Dominio alternativo brindado en el email de alta 
    $mail->Username = "contacto@planeta-golosinas.com.ar";  // Mi cuenta de correo
    $mail->Password = "C0nt4ct0";  // Mi contraseña

    $mail->From = "contacto@planeta-golosinas.com.ar";  // Mi cuenta de correo // Email desde donde envío el correo.
    $mail->FromName = "Planeta Golosinas";  // Mi cuenta de correo
?>