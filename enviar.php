<?php

$nombre = $_POST['nombreApellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$consulta = $_POST['consulta'];


$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Asunto: " . $asunto . " \r\n";
$mensaje .= "Mensaje: " . $consulta . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'federico.garcia@etermax.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>