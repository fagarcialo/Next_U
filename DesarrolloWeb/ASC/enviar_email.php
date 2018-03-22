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
        <h3>Muy pronto uno de nuestros asesores se pondrá en contacto con usted y responderá sus inquietudes o preguntas. </h3>
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
    $comentario = $_POST['comentario'];

  	$mensaje = 'El señor(a) '.$nombre.', está interesado en nuestros servicios. Por favor comunicarse al '.$telefono.' al correo '.$email.'. Comentario o pregunta:'.$comentario;

  	mail('ascarmenia2@gmail.com', 'Alguien está interesado en tus servicios',utf8_decode($mensaje));
  	?>


    <!--   Boton Flotante   -->
    <div class="fixed-action-btn horizontal click-to-toggle">
      <a class="btn-floating btn-large red">
        <i class="material-icons">menu</i>
      </a>
      <ul>
        <li><a class="btn-floating red hide-on-small-only" href="https://www.youtube.com/results?search_query=ASSC+DE+COLOMBIA"><i class="material-icons fa fa-youtube"></i></a></li>
        <li><a class="btn-floating red accent-4 hide-on-small-only" href="https://www.instagram.com/"><i class="material-icons fa fa-instagram"></i></a></li>
        <li><a class="btn-floating light-blue darken-4" href="https://www.facebook.com/asccolombia1/"><i class="material-icons fa fa-facebook"></i></a></li>
        <li><a class="btn-floating green" href="https://api.whatsapp.com/send?phone=573175731148"><i class="material-icons fa fa-whatsapp"></i></a></li>
        <li><a class="btn-floating blue" href="https://twitter.com/@asccolombia1"><i class="material-icons fa fa-twitter"></i></a></li>
        <li><a class="btn-floating lime accent-4" href="tel:3175731148"><i class="material-icons fa fa-phone"></i></a></li>
      </ul>
    </div>

    <!--   Pie   -->
    <footer class="page-footer cyan lighten-1">

      <div class="container">
        <div class="row">
          <div class="col l3 s12">
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
  		  <h5 class="white-text">Horario de Atención</h5>
  		  <ul>
              <li>Lunes a Viernes de 8am a 11:45 am y 2pm a 5:45 pm</li>
              <li>Sabados de 8:45am a 12m</li>
            </ul>
          </div>

  		<div class='col l3 s12'>
  			<h5 class="white-text">Como llegar</h5>

  			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.343064154923!2d-75.67605168523829!3d4.532095296707114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5ae0e22e28d%3A0xe064b577503538c3!2sASC+Colombia!5e0!3m2!1ses-419!2sco!4v1520537552470" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col l3 s12">
            <h5 class="white-text">Encuentranos también en</h5>
            <ul>
              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://www.facebook.com/asccolombia1/"><i class="fa fa-facebook"></i></a> Facebook</li>

              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://www.youtube.com/results?search_query=ASSC+DE+COLOMBIA"><i class="fa fa-youtube"></i></a> Youtube</li>

              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://api.whatsapp.com/send?phone=573175731148"><i class="fa fa-whatsapp"></i></a> Whatsapp</li>

              <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://twitter.com/@asccolombia1"><i class="fa fa-twitter"></i></a> Twitter</li>

            </ul>
          </div>
        </div>
      </div>


      <div class="footer-copyright">
        <div class="container center-align">
        Página creada por <a href="http://www.clicksoft.com.co">ClickSoft</a> Derechos de Autor.
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    </body>
    </html>
