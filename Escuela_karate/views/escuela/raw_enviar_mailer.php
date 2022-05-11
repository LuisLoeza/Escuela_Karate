<?php

require "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->SMTPOptions = array(
  'ssl' => array(
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true
 )
);
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'dojoryukyu117@gmail.com';   
$mail->Password = 'contrasenea';  

$mail->setFrom('dojoryukyu117@gmail.com', 'Escuela de karate RyuKyu');
$mail->addAddress('miranda091299@gmail.com', 'Omar Miranda');     // Add a recipient
$mail->addReplyTo('dojoryukyu117@gmail.com', 'Escuela de karate RyuKyu');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por: '.$_POST['nombre'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombre'].'<br><b>Apellido: </b>'.$_POST['apellido'].'<br><b>Email: </b>'.$_POST['email'].'<br><b>Telefono: </b>'.$_POST['telefono'].'<br><b>Motivo: </b>'.$_POST['motivo'].'<br><b>Comentario: </b>'.$_POST['comentario'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="index.php";
    </script>
  ';
}

?>