<?php
$nombre_usuario = $_POST['nombre']; //declaramos las variables con las que se va a trabajar
$email = $_POST['email']; //Utilizamos el metodo post
$consulta = $_POST['mensaje'];

$destino = "sara.jaz987@gmail.com"; //agregamos el correo donde van a llegar los mensajes

$asunto = "Consulta enviada desde pagina personal"; //respuesta que se tiene al mandar el mensaje

$mensaje = "Nombre: ".$nombre_usuario."\r\n"; 
$mensaje .= "Email: ".$email."\r\n";
$mensaje .= "Consulta: ".$consulta."\r\n";

$remitente = "From: sara.jaz987@gmail.com"; //declaramos también el correo remitente

mail($destino, $asunto, $mensaje, $remitente); 

header("Location:index.php?i=ok"); //declaramos que cuando se mande el mensaje este vuelva a cargar toda la pagina

?>