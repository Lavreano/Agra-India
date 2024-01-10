<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$fecha = $_POST['fecha'];
	$duracion = $_POST['duracion'];
	$mayor = $_POST['mayor'];
	$menor = $_POST['menor'];
	$mensaje = $_POST['mensaje'];

	$comentario = $_POST['comentario'];

	$mail_destino = 'laureano.sierra@davinci.edu.ar';

	$headers = "Mime-version: 1.0;\r\n";
	$headers .= "Content-type: text/html; charset=utf-8;\r\n";
	$headers .= "From: $nombre $apellido <$email>\r\n";
	$headers .= "To: $mail_destino\r\n";

	$mensaje = "
	<html>
		<head>
		  <title>Mensaje enviado desde la pagina de contacto</title>
		</head>
		<body>
		<p><small>Esta es una consulta enviada a travéz del formulario de contacto ¿QUERÉS CONTRATAR UN TOUR?</small></p>
		<p>Nombre completo: <strong>".$nombre."</strong><br>
		<p>Correo eléctronico: <a href='mailto:".$email."'>".$email."</a></p>
		<p>Número de teléfono: <strong>".$tel."</strong></p>
			<p>Sobre el viaje turistico<br>
			Fecha de viaje: <strong>".$fecha."</strong><br>
			Duración del viaje: <strong>".$duracion."</strong><br>
			Mayores de edad: <strong>".$mayor."</strong>.<br>
			Menores de edad: <strong>".$menor."</strong>
			</p>
			<p>Su consulta:<br>
			".$mensaje."
			</p>
		</body>
		</html>
	";

	mail($mail_destino, 'Mensaje recibido desde el formulario contacto', $mensaje, $headers);
	header("Location: gracias.html");

?>