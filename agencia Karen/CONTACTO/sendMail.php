<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$celular=$_POST['celular'];
$mensaje=$_POST['mensaje'];

$cuerpo= "Ha recibido un mensaje de: $nombre
Datos enviados:
Email: $email
Telefono: $telefono
Celular: $celular
Ciudad: $ciudad
Mensaje: $mensaje";

if (mail('karenveg50@gmail.com', $nombre, $cuerpo)){
    echo "Su mensaje ha sido enviado<br><a href='contactos.html'>Volver</a>";
}else {
    echo "Su mensaje no pudo ser enviado<br><a href='contactos.html'>Volver</a>";
}
?>