<html>
  <body>
	<h1>Mensaje enviado con exito</h1>
	<?php
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$ciudad = $_POST['ciudad'];
	$mensaje = 'El señor(a) '.$nombre.', esta interesado en nuestros servicios. Por favor comunicarse al '.$telefono.' o al correo '.$email;
	echo 'Señor '.$nombre.' ,se envio mensaje correctamente a nuestros asesores . Prontamente nos contactaremos con usted';
	mail('kilder@sonorik.com', 'Pruebas Contactenos pagina',utf8_decode($mensaje));
	?>
  </body>

</html>