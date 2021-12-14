<?php
//correo donde va a llegar la informacion
$destinatario = 'grupoconsultores01@gmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$header = "Mensaje Enviado Desde Maca Seguros";

$mensajeCompleto = $message . "\nAtentamente" . $name;


mail($destinatario, $mensajeCompleto, $header);
echo "<script>alert('correo encviado exitosamente')</script>";

?>