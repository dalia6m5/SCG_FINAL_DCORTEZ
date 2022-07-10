<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$tipo = $_POST['gridRadios'];
$detalle = $_POST['detalle'];

$mensaje = "Este menesaje ha sido enviado por " . $nombre . ",\r\n";
$mensaje .= "cuyo mail es " . $email . ",\r\n";
$mensaje .= "y número  " . $numero . ",\r\n";
$mensaje .= "El tipo de transporte por el que cosulta es " . $tipo . ",\r\n";
$mensaje .= "Este es el detalle del mensaje para su cotización: " . $_POST['detalle'] . ",\r\n";
$mensaje .= "Enviado el  " . date('d/m/Y', time());

$para = 'dalia.66.m5@gmail.com';
$asunto = 'Solicitud de Cotización SCG'

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:gracias.html");

?>



