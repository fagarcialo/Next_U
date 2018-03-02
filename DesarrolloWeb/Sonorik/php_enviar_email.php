<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width initial-scale=1'>
    <meta name='mobile-web-app-capable' content='yes'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/estilos.css'>
    <script src='js/bootstrap.min.js'></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Sonorik</title>
  </head>

  <body class="propiedades-body">
    <div class="container-fluid">
      <header class="barra-superior">
        <nav class='navbar navbar-inverse navbar-fixed-top barra-superior'><!-- propiedades para que quede inmovil -->
          <div class="container-fluid">
            <!-- Icono y menus -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed boton-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar color-span-boton"></span>
                <span class="icon-bar color-span-boton"></span>
                <span class="icon-bar color-span-boton"></span>
              </button>
              <img class='logo-img' src='images/logo.png'/>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html"><h4>Inicio</h4></a></li>
                <li><a href="sonido.html"><h4>Sonido En Vivo</h4></a></li>
                <li><a href="iluminacion.html"><h4>Iluminación</h4></a></li>
                <li><a href="dj.html"><h4>DJ</h4></a></li>
                <li><a href="backline.html"><h4>BackLine</h4></a></li>
              </ul>
            </div>

          </div>
        </nav>﻿
      </header>
    </div>
    <div class="welcome-title text-center titulo-pagina">
      <hr>
      <hr>
      <h1>MENSAJE ENVIADO CON EXITO!</h1>
      <h3>Muy pronto uno de nuestros asesores se pondrá en contacto con usted o responderá sus inquietudes o preguntas. </h3>
      <div class='text-center'>
        <a href="index.html">
          <button type="button" name="button" class='btn btn-primary'>Regresar</button>
       </a>

      </div>
    </div>


    <?php
  	$nombre = $_POST['nombre'];
  	$telefono = $_POST['telefono'];
  	$email = $_POST['email'];
  	$ciudad = $_POST['ciudad'];
    $servicio = '';
    $comentario = $_POST['comentario'];

    if ($_POST['sonido'] == 'on'){
      $servicio = 'Sonido';
    }
    elseif ($_POST['iluminacion'] == 'on'){
      $servicio = 'Iluminacion';
    }
    elseif ($_POST['dj'] == 'on'){
      $servicio = 'DJ';
    }
    else{
      $servicio = 'BackLine';
    }

  	$mensaje = 'El señor(a) '.$nombre.', está interesado en nuestros servicios. Por favor comunicarse al '.$telefono.' en la ciudad de '.$ciudad.' o al correo '.$email.'. Servicio de interes: '.$servicio.'. Comentario o pregunta:'.$comentario;

  	//mail('kilder@sonorik.com', 'Kilder, alguien está interesado en tus servicios',utf8_decode($mensaje));
  	?>
  </body>

</html>
