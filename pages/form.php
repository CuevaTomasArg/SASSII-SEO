<?php

// recogeremos los datos del formulario
$nombre = $_POST["name"];
$email = $_POST["email"];
$mensaje = $_POST["textarea"];

$mensaje="Este mensaje fue enviado por " , $nombre ,"\rn";
$mensaje="E-mail ", $email, ,"\rn";
$mensaje="Mensaje: ", $_POST ["textarea"] ,"\rn";
$mensaje="Enviado el ", date['d/m/Y' , time()];

$para = "tomassantiagocueva@gmail.com";
$asunto = $_POST["select"];

header('Location:gracias.html');

mail($para,$asunto, utf8_decode($mensaje), $header);

?>