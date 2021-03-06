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
        <li><a href="contactenos.html">Contactenos</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li>

      <?php

      	function contador () {
      		$archivo = "php/contador.txt";
      		$f = fopen($archivo, "r");
      		$contador = 0;

      		if ($f){
      			$contador = fread($f, filezise($archivo));
      			$contador = $contador + 1;
      			fclose($f);
      		}

      		$f = fopen($archivo, "w+");

      		if ($f){
      			fwrite($f, $contador);
      			fclose($f);
      		}
      		return $contador;
      	}

      	$visitante = contador();
      	echo "Eres el visitante #".$visitante;

      ?>
      </li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <?php
  echo "Hola mundo";
  ?>
  <!--   Seccion Principal   -->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container sombra">
        <div class="row center">
          <div class="col s12 valign-wrapper">
            <h1 class="header col s12 ">ASC COLOMBIA S.A.S</h1>
          </div>
        </div>
        <div class="row center">
          <h3 class="header col s12 light">Holding Empresarial</h3>
        </div>
        <div class="row center center-align">
          <div class="col s12">
            <img class='logo-img' src='images/logo.png'/>
          </div>
        </div>
        <div class="row center">
          <h1 class="header col s12 light">Tel (4) 7442784-7440622 - 317 5731148</h1>
        </div>
        <div class="row center">
          <h5 class="header col s12 light">Alguno de nuestros asesores tendrá el gusto de atenderlo</h5>
        </div>
        <div class="row center">
          <a href="#caracteristicas" id="download-button" class="btn-large waves-effect waves-light cyan lighten-1">Empecemos</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <!--   Caracteristicas   -->
  <div class="container" id="caracteristicas">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Nuestra Misión</h5>

            <p class="light center-align">Ser la empresa líder en el mejoramiento del servicio y  bienestar integral de las empresas, los trabajadores, ser un modelo económico que contribuya a la generación de empleo y desarrollo social, gestionar proyectos de acción social, contribuir los conocimientos de la empresa para ayuda mutua entre empleadores y trabajadores dependientes e independientes,  buscar convenios deportivos, recreacionales y de turismo  por el bien de los asociados y su grupo familiar Elaborar campañas a nuestros asociados para cuidar el planeta. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">thumb_up</i></h2>
            <h5 class="center">Nuestra Visión</h5>

            <p class="light center-align">En el 2020 ser reconocida como la asociación más sólida y de mayor contribución al progreso y desarrollo del país, generando desarrollo empresarial y fortalecimiento para las empresas, generando futuros proyectos sociales y económicos  en el ámbito nacional e internacional.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">sentiment_very_satisfied</i></h2>
            <h5 class="center">Nuestros  valores</h5>

            <p class="light center-align">Responsabilidad, Amor por nuestro trabajo, experiencia, Calidez del servicio, Calidad Liderazgo e innovación.</p>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!--   Seccion Secundaria   -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light sombra">Está en manos de expertos... </h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <!--   Nuestros servicios   -->
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <div class="row">
            <h1 class="black-text darken-3">Nuestros Servicios</h1>
            <!-- <p class="left-align light">Quieres conocer en tiempo real y desde la comodidad de tu casa, el desempeño de tu negocio? gracias a que nuestros productos están desarrollados en lenguajes Web y están conectados a la Nube, es posible realizar esto y mucho más. Solo necesitas una conexión a Internet y desde cualquier dispositivo, podrás consultar y realizar operaciones de tu negocio desde cualquier lugar del mundo.</p>-->
          </div>

          <!--   seguridad social   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="card-panel cyan lighten-1 card hoverable alto-servicios">
                <div class="card-image waves-effect waves-block waves-light ">
                  <img class="activator" src="images/seguridad_social.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text white-text"><h3 class="activator">SEGURIDAD SOCIAL</h3><i class="material-icons right">more_vert</i></span>

                </div>
                <div class="card-reveal left-align">
                  <span class="card-title grey-text text-darken-4"><h5>SEGURIDAD SOCIAL</h5> <i class="material-icons right">close</i></span>
                  <p class="flow-text">Este servicio consiste en la tercerización de servicios profesionales en la seguridad social y caja de compensación de sus trabajadores, como cotizantes dependientes. Según la ley en Colombia, así:</p>
                  <p class="flow-text">-	Reforma tributaria ley 1607 de 2012, de acuerdo a esta ley, las empresas bien sean personas naturales o jurídicas , que tengan más de 2 trabajadores tendrán un ahorro en la cotización del 8.5% , en el sistema de seguridad social y 5% en parafiscales.</p>
                  <p class="flow-text">-	Decreto 2616 de 2013, este decreto le permite afiliar a sus trabajadores por días, además se ahorra el 13,5% de la cotización,  los trabajadores no están obligados a cotizar EPS, es un dato muy importante para aquellos trabajadores que vienen con el régimen subsidiado o familias en acción, requisitos importantes, el trabajador debe tener un régimen de salud subsidiado, aportar ARL  30 días, tener un contrato de trabajo bien sea verbal o escrito, ser trabajadores que trabajan menos de 30 días, mínima cotización 7 días.
                  </p>
                </div>
              </div>
            </div>
            <!--   Independientes   -->
            <div class="col s12 m4">
              <div class="card-panel cyan lighten-1 card hoverable alto-servicios">
                <div class="card-image waves-effect waves-block waves-light ">
                  <img class="activator" src="images/independientes.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text white-text"><h3 class="activator">INDEPENDIENTES Y CONTRATISTAS</h3><i class="material-icons right">more_vert</i></span>

                </div>
                <div class="card-reveal left-align">
                  <span class="card-title grey-text text-darken-4"><h5>INDEPENDIENTES Y CONTRATISTAS</h5> <i class="material-icons right">close</i></span>
                  <p class="flow-text">a-	Afiliación y pagos al sistema de seguridad social a personas o trabajadores  independientes o los trabajadores que tengan contrato de servicios, este tipo de trabajadores no tienen ningún beneficio de ley en la cotización según la ley 100/93, siempre y cuando se afilien legalmente como trabajadores independientes.</p>
                  <p class="flow-text">b-	Afiliación y pagos solo salud, aplica para aquellas personas independientes que no tienen ningún tipo de contrato, tienen el beneficio el de solo salud por no tener ingresos o no ganan más de un salario mínimo.</p>

                  <p class="flow-text">c-	Afiliación y pagos de (Salud y Arl ) este beneficio aplica para trabajadores que ya están pensionados o han recibido indemnización sustitutiva al igual para estudiantes del Sena en etapa lectiva o productiva.
                  </p>
                </div>
              </div>
            </div>
            <!--   otros servicios   -->
            <div class="col s12 m4">
              <div class="card-panel cyan lighten-1 card hoverable alto-servicios">
                <div class="card-image waves-effect waves-block waves-light ">
                  <img class="activator" src="images/otros_servicios.jpg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text white-text"><h3 class="activator">OTROS SERVICIOS</h3><i class="material-icons right">more_vert</i></span>

                </div>
                <div class="card-reveal left-align">
                  <span class="card-title grey-text text-darken-4"><h5>OTROS SERVICIOS</h5> <i class="material-icons right">close</i></span>
                  <p class="flow-text">Vinculación opcional de seguros o pólizas de vida, accidentes personales, seguro contra todo riesgos, poliza hogar.</p>
                  <p class="flow-text">	Seguro para automotores SOAT</p>
                  <p class="flow-text">	Servicios Deportivos y escuela de futbol</p>
                  <p class="flow-text">	Servicios Funerarios.</p>
                  <p class="flow-text">	Servicios Efecty Dimonex (Pago de Facturas de comprar por Catalogo, Celulares, Telefonía fija, Efigas, Compras por Mercado Libre, Créditos Banco Mundo Mujer. Etc.) </p>
                  <p class="flow-text">	Pago de Giros Internaciones Wester Union.</p>
                  <p class="flow-text">	Servicio de Claro Telecomunicaciones Fijo,  Móvil, Televisión Satelital.</p>
                  <p class="flow-text">	Servicio Medico en el Exterior Wot.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!--   video  -->
          <div class="row">
            <div class="col s12 m12">
              <div class="video-container">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/sX4a2L4mUXQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <!--   sonido   -->
          <h4>Escuche nuestra publicidad...</h4>
          <!--<audio controls autoplay>-->
          <audio controls >
          <source src="audio/publicidad.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>

        </div>
      </div>

    </div>
  </div>

  <!--  Como adquirir nuestos sistemas  -->
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h3>Estoy interesado, que debo hacer?</h3>
          <p class="left-align light">Estas listo para hacer crecer tu negocio de manera ordenada con nuestros servicios?, lo unico que debes hacer es ponerte en contacto al 317 5731148 o a los teléfonos 7442784 y 7440622 en Armenia Quindío. Recuerda que también puedes hacerlo a traves de la sección "Contactenos" o por medio de los iconos de redes sociales, para indicarte los pasos a seguir.</p>
        </div>
      </div>

    </div>
  </div>

  <!--   Seccion Tercearia   -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light sombra">Toma hoy mismo la mejor decisión para tu empresa</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <!--   Boton Flotante   -->
  <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating light-blue darken-4" href="https://www.facebook.com/asccolombia1/"><i class="material-icons fa fa-facebook"></i></a></li>
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
            <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://www.facebook.com/asccolombia1/"><i class="fa fa-facebook"></i></a> Facebook</li>

            <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://www.youtube.com/embed/sX4a2L4mUXQ"><i class="fa fa-youtube"></i></a> Youtube</li>

            <li><a class="btn-floating btn-small waves-effect waves-light blue-grey" href="https://api.whatsapp.com/send?phone=573175731148"><i class="fa fa-whatsapp"></i></a> Whatsapp</li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Página creada por <a href="http://www.clicksoft.com.co">ClickSoft</a>. Derechos de Autor.
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/index.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
