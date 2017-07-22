<?php

require './mailer/class.phpmailer.php';
require './mailer/class.smtp.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 0;

$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = "agenciastucia@gmail.com";
$mail->Password   = "Inboxq1w2e3r4t5*";

//Quien envia el mensaje (mail,nombre)
$mail->SetFrom('agenciastucia@gmail.com', 'Javier');
//Quien recibe el mensaje (mail,nombre)
$mail->AddAddress('agenciastucia@gmail.com', 'El Destinatario');
//Asunto
$mail->Subject = 'Esto es un correo de prueba';
//Mensaje en formato HTML
$mail->MsgHTML("Hola");
//Mensaje en formato texto plano por si se rechaza el HTML
$mail->AltBody = 'This is a plain-text message body';

//Envio de mail
if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo "Enviado!";
}
