<?php

//writeHeader(); // call the function

//**//
function writeHeader() {
    $header = '
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="keywords" content="Soporte tecnico,it,ti,soluciones,datacenter,consultoria,centro de datos,empresarial,administracion,proyectos,soporte multimarca, Focus On Services es un proveedor global de servicios con presencia en más de 16 países de Latinoamérica con un amplio portafolio de servicios en Tecnologías de Información y con los mejores tiempos de respuesta de la industria, Software, Desarrollo, app, apps, android, IOS, 
	Transformación digital, Software on demand, Software a la medida, Servicios de desarrollo de software, fabrica de software, Progress, 4GL, ABL, app server, PAS">
	<meta name="description" content="Somos una empresa Mexicana del ramo de Servicios y Tecnologías de Información legalmente establecida en el año 2000 con una extensa cobertura geográfica en América Latina.">

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/slippry.css" rel="stylesheet" >
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/cobertura.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

';
	echo $header;
}

//*invoque dependences JS in this page*//
function writejs() {
    $dependencesJS = '
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyAGiMQz-4ltGCij5VSL69oNH2XdxvCd2-s"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/slippry.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/gmap.js"></script>
	<script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/grMap.js"></script>
    <script src="js/languaje.js"></script>
    <script src="js/searchgoogle.js"></script>
    <script src="js/analiticaGoogleFos.js"></script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript" src="js/validator.min.js"></script>
	<script type="text/javascript" src="js/form-scripts.js"></script>

	
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
';
	echo $dependencesJS;
}

//*invoque main menu in all pages*//
function writeMainMenu(){
	$menu=
	'
		<nav class="navbar navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				<div class="site-logo">
				<a href="index.php"><img src="img/logo.png" class="img-responsive" alt="Focus On Services | Servicios de TI en México y América Latina. Soporte Técnico, Data Center, Soluciones Empresariales en Tecnología" /></a><br>
				</div>
				</div>

				<div class="col-md-10 col-sm-10">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				<i class="fa fa-bars"></i>
				</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.php"><b>Inicio</b></a></li>
				<li><a href="nosotros.php"><b>Nosotros</b></a></li>
				<li><a href="servicios.php"><b>Servicios</b></a></li>
				<li><a href="cobertura.php"><b>Cobertura</b></a></li>
				<li><a href="#contact"><b>Contacto</b></a></li>
				<!--li class="dropdown nav-toggle">
					<a href="#" class="dropdown-toggle glyphicon glyphicon-search" data-toggle="dropdown" title="Search"></a>
					<ul class="dropdown-menu" style="width:30em;background:trasparent;">
					<div> <gcse:search></gcse:search></div>
					</ul>
				</li-->
				<li class="dropdown nav-toggle">
				<a href="#" class="dropdown-toggle glyphicon glyphicon-globe" data-toggle="dropdown" title="Language"></a>
					<ul class="dropdown-menu">
					<div id="google_translate_element"></div>
					</ul>				
				</li>
				</div>
				<!-- /.Navbar-collapse -->

				</div>
			</div>
		</div>
	<!-- /.container -->
	</nav>
	';
	echo $menu;
}

//*invoque form  contact on all pages*//
function writeFormContact(){
	$form=
	'
	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-white text-center"><br><br>
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Contáctenos</h2>
					<div class="divider-header"></div>
					<p>¡Con gusto responderemos a la brevedad!</p>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="well">
			
			<form role="form" id="contactForm" data-toggle="validator" class="shake">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="name" class="h4">Nombre</label>
						<input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="Completa este campo">
						<div class="help-block with-errors"></div>
					</div>
					<div class="form-group col-sm-6">
						<label for="email" class="h4">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="h4 ">Mensaje</label>
					<textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Enviar</button>
				<div id="msgSubmit" class="h3 text-center hidden"></div>
				<div class="clearfix"></div>
			</form>
			</div>
		</div>
		</div>
	</section>
	<!-- /Section: contact -->
	';
	echo $form;
}

//

function writeMap(){
	echo $map='
	<div id="map-btn1-div">
	<a id="map-btn1" class="gmap-btn close-map-button btn-show" href="#map">
	Haga clic aquí para abrir el mapa
	</a>
	</div>
	<a id="map-btn2" class="btn btn-skin btn-lg btn-noradius gmap-btn close-map-button btn-hide" href="#map" title="Close google map" data-toggle="tooltip" data-placement="top">
	Maricopa #19, Col. Nápoles Benito Juárez, México D.F. 03810
	</a>
	<!-- google map -->
	<section id="map" class="close-map">
	<div id="google-map"></div>
	</section>	
	
	';
}

function writeFooter(){
	echo $footer='
	<footer>
	<div class="container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
	<div class="text-center">
	<a href="#intro" class="totop"><i class="pe-7s-angle-up pe-3x"></i></a>
	<div class="social-widget">
	<p><span class="glyphicon glyphicon-map-marker"></span> Maricopa #19, Col. Nápoles Benito Juárez, México CDMX. 03810
	<br><span class="glyphicon glyphicon-phone"></span> Soporte México: 01 800 003 6287
	<br><span class="pe-7s-call"></span> Soporte México: +52 (55) 5687 3040
	<br><span class="glyphicon glyphicon-envelope"></span> bid.desc@focusonservices.com</p>
	<p>Conéctate con Focus On Services<p>
	<ul class="team-social">
	<li class="social-facebook"><a href="https://www.facebook.com/FocusOnServices" target="_blank"><i class="fa fa-facebook" title="facebook"></i></a></li>
	<li class="social-twitter"><a href="https://twitter.com/FocusOnServ" target="_blank"><i class="fa fa-twitter" title="twitter"></i></a></li>
	<li data-toggle="modal" data-target="#job" alt="Trabaja de Focus on services" title="Trabaja con nosotros"><img src="img/icons/lin.png" class="img" alt="Trabaja de Focus on services" width="40"></li>
	</ul>
	</div>
	<p>&copy;Focus On Services.  Algunos Derechos Reservados </p>
	<div class="credits">
	<p>Las marcas mencionadas son marcas registradas o marcas comerciales de sus respectivos propietarios en México y/u otros países. <a href="http://www.focusonservices.com/aviso_privacidad_fos_2013.pdf" target="_blank" title="Aviso de Privacidad">Aviso de Privacidad</a></p>
	</div>
	</div>
	</div>
	</div>
	</div>
	</footer>
	
	
	<!-- Modal -->
	<div class="modal fade" id="job" role="dialog">
	<div class="modal-dialog modal-sm">

	<!-- Modal content-->
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Trabaja en Focus On Services</h4>
	</div>
	<div class="modal-body text-center">
	<a href="https://www.indeed.com.mx/Empleos-de-Focus-on-services" target="_blank"><img src="img/icons/ineed.jpg" class="img-thumbnail" alt="Trabaja de Focus on services" width="100"> 
	</a>
	<a href="https://mx.linkedin.com/company/focus-on-services-sa-de-cv" target="_blank"><img src="img/icons/lin.png" class="img-thumbnail" alt="Trabaja de Focus on services" width="100">
	</a>
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	</div>
	</div>

	</div>
	</div>
	';
}


?>
