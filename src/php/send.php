<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];

	if(mail('paula@thp.cl', $asunto, $mensaje)){
		echo "Correo enviado";
        header("location: ./index.html",true,303);
	}
 ?>