<?php

$destino ='rosatiluciana94@gmail.com';
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$mensaje= $_POST['mensaje'];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo "\nTelefono: " . $telefono "\nMensaje: " . $mensaje;
$header = "Mensaje enviado";
mail($destino, $contenido, $header);
echo "<script> alert ('correo enviado exitosamente')</script>";
echo "<script> setTimeout (\"location.href='index.html'\",1000)</script>";
?>