<?php

$nombre = $_POST['nombreApellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$consulta = $_POST['consulta'];

$destinatario_php = "fedengarcia11@hotmail.com";
$asunto_php = "Contacto desde mi pagina web";

$carta = "De: $nombre \n";
$carta.= "Email: $email \n";
$asunto.= "Asunto: $asunto \n";
$consulta.= "Consulta: $consulta";

mail($destinatario_php,$asunto_php,$carta);
header('Location: index.html');