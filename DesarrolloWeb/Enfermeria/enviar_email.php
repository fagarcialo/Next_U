<html>
  <body>
	<h1>Mensaje enviado con exito</h1>
	<?php
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$ciudad = $_POST['ciudad'];
	$mensaje = 'El se�or(a) '.nombre.', esta interesado en nuestros servicios. Por favor comunicarse al '.$telefono.' o al correo '.$email;
	echo 'hola';
	//mail('fagarcia@itc.com.co', 'Pruebas Contactenos pagina',utf8_decode($mensaje));
	?>
  </body>

</html>