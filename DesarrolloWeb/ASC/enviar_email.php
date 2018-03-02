<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>ASC-Colombia</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="grey lighten-2">
  <!--  Barra Superior   -->
  <nav class="cyan lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.html" class="brand-logo">
        <img class="tamano-logo" src='images/logo.png'/>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Inicio</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div id="index-banner" class="parallax-container">
    <div class="row center container sombra">
        <h1>MENSAJE ENVIADO CON EXITO!</h1>
        <h3>Muy pronto uno de nuestros asesores se pondrá en contacto con usted o responderá sus inquietudes o preguntas. </h3>
        <div class='text-center'>
          <a href="index.html">
            <button type="button" name="button" class='btn-large waves-effect waves-light cyan lighten-1'>Regresar</button>
         </a>

        </div>
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
    <!--   Boton Flotante   -->
    <div class="fixed-action-btn horizontal click-to-toggle">
      <a class="btn-floating btn-large red">
        <i class="material-icons">menu</i>
      </a>
      <ul>
        <li><a class="btn-floating light-blue darken-4" href="https://www.facebook.com/clicksoftco"><i class="material-icons fa fa-facebook"></i></a></li>
        <li><a class="btn-floating red" href="https://www.youtube.com/embed/sX4a2L4mUXQ"><i class="material-icons fa fa-youtube"></i></a></li>
        <li><a class="btn-floating green" href="https://api.whatsapp.com/send?phone=573175731148"><i class="material-icons fa fa-whatsapp"></i></a></li>

      </ul>
    </div>

    <!--   Pie   -->
    <footer class="page-footer cyan lighten-1">

      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">ASC Colombia S.A.S</h5>
            <p class="grey-text text-lighten-4">Nuestra empresa  es una de las instituciones  grandes en el eje cafetero, que cuenta con la infraestructura y la experiencia necesaria para brindar al afiliado la confianza y la seguridad que se necesita, actualmente contamos con  60  clientes empresariales y 700 afiliados a en diferentes tipos de servicio. </p>




          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Datos de Contacto</h5>
            <ul>
              <li>Armenia Quindío - Colombia</li>
              <li>Cra 14 Nro.21-55 Local 2 Condominio La 14</li>
              <li>Tel: (4) 7442784-7440622 </li>
              <li>Celular: 317 5731148 </li>
              <li>ascarmenia2@gmail.com</li>

            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Encuentranos también en</h5>
            <ul>
              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://www.facebook.com/clicksoftco"><i class="fa fa-facebook"></i></a> Facebook</li>

              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://www.youtube.com/embed/sX4a2L4mUXQ"><i class="fa fa-youtube"></i></a> Youtube</li>

              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://api.whatsapp.com/send?phone=573175731148"><i class="fa fa-whatsapp"></i></a> Whatsapp</li>


            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        Página creada por <a href="http://www.clicksoft.com.co">ClickSoft</a>
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    </body>
    </html>
