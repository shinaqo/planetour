<?php

$name = isset( $_POST['name']) ? $_POST['name'] : '';
$asunto="hola";
$email = isset( $_POST['email']) ? $_POST['email'] : '';
$mensaje = isset( $_POST['mensaje']) ? $_POST['mensaje'] : '';
$contenido='
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2> Haz recibido un mensjae atravez de la Página</h2>
		<p>'.$name. 'Te ha enviado el siguiente mensaje: </p>
		<p>'.$mensaje.'<br><br>Puedes ponerte en contacto con la persona al email : '.$email.'</p>
		<hr>
	</body>
	</html>';

//configuracion de los encabezaddos
$headers ='MINE-Version: 1.0'. "\r\n";
$headers .="Contecnt-type: text/html; charset=UTF-8\r\n";

$envio =mail('ian.vinales27@gmail.com',$asunto,$contenido,$headers);

if($envio){
	$miresultado='<h4>el Correo ha sido enviado! Gracias por ponerse en contacto con nostoros</h4>';
}else{
	$miresultado='<h4>no se envio el correo.</h4>';
}
echo $miresultado;
