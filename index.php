<!DOCTYPE html>
<html lang="en">
<head>
 <title>Focus On Services</title>
<?php include 'UtilList.php';
//*write header dependences*//
writeHeader();
?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
    <!-- page loader -->
    <div id="page-loader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container con1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con3">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page loader -->
	<!-- Section: home slide -->
    <section id="intro" class="home-slide text-light">
<!-- Navigation -->
<div>
<?php
//*write main menu dependences*//
 writeMainMenu();?>
</div>
<!-- /Navigation -->
		<ul id="valera-slippry">
		  <li>
			<div><img src="img/parallax/ded.jpg"  alt="Su mejor aliado para la Transformación Digital <br /><a href='#about' class='btn btn-skin btn-slide'>Saber más</a>">
			</div>
		  </li>
		  <li>
			<div><img src="img/slides/2.jpg"  alt="Call Center<br /><a href='servicios.php' class='btn btn-skin btn-slide'>Saber más</a>">
			</div>
		  </li>
		  <li>
			<div><img src="img/slides/4.jpg" alt="Servicios de Consultoría<br /><a href='servicios.php' class='btn btn-skin btn-slide'>Saber más</a>">
			</div>
		  </li>
		  <li>
			<div><img src="img/slides/datacenter.jpg" alt="Data Center <br /><a href='servicios.php' class='btn btn-skin btn-slide'>Saber más</a>">
			</div>
		  </li>
		  <li>
			<div><img src="img/slides/5.jpg" alt="Soluciones Especializadas para Líneas Aéreas<br /><a href='servicios.php' class='btn btn-skin btn-slide'>Saber más</a>">
			</div>
		  </li>
		 			
		</ul>
    </section>
	<!-- /Section: intro -->
	<!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white"><br><br>
		<div class="container marginbot-20">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold" translate="no">Focus On Services</h2>
					<div class="divider-header"></div>
					<p>Somos una empresa Mexicana del ramo de Servicios y Tecnologías de Información legalmente establecida desde el año 2000 con una extensa cobertura geográfica en América Latina.</p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" onmouseover="document.getElementById('videoPlayer').muted=false" onmouseout="document.getElementById('videoPlayer').muted=true">
		<div class="videocontainer home wow bounceInUp" data-wow-delay="0.2s">
			<div>
				<video width="100%" id="videoPlayer" controls preload="auto" loop autoplay poster="video/giphy.gif" muted>
				<source src="video/infografia-es.mp4" type="video/mp4">
				<div>Lo sentimos, tu explorador no es compatible con videos HTML5. Por favor actualiza a un explorador más reciente.</div>
				</video>
		<div class="btns text-right">
		<img src="video/Brazil.png" data-toggle="modal" data-target="#bra" title="Idioma Portugués">
		<img src="video/Usa.png" data-toggle="modal" data-target="#eu" title="Idioma Inglés">
		</div>
			</div>
		</div>
		</div>
	</section>
	<!-- /Section: about -->
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Servicios</h2>
					<div class="divider-header"></div>
					<p>Nuestro catálogo</p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
		<div class="container">
        <div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<span class="pe-7s-refresh-2 pe-5x color-2 circ wow bounceInUp" data-wow-delay="0.6s"></span>
					</div>
					<br>
					<div class="service-header">	
					<h5>Servicios Administrados de TI para Sector Privado y Gobierno</h5>
					</div>
					<div class="service-desc">
						<ul class="list-unstyled text-justify">
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Participación activa en Licitaciones Gubernamentales.</li	
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Consultoría en Integración de Propuestas de Servicio para Licitaciones del Sector Privado y Gobierno.</li>							
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Consultoría, soporte y servicio para Benchmarking de productos de TI para proyectos gubernamentales.</li>							
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Consultoría, diseño e implementación de Maquetas y Pruebas de Concepto para soluciones gubernamentales de TI.</li>							
						</ul>
					</div>
					<div class="service-fot">
						<a href="servicios.php" class="btn btn-skin">
						<span class="glyphicon glyphicon-send"></span>&nbsp;
						Saber más</a>
					</div>
                </div>
				</div>
            </div>
			
			<div class="col-sm-4 col-xs-12">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<span class="pe-7s-science pe-5x color-1 circ wow bounceInUp" data-wow-delay="0.4s"></span>
					</div>
					<br>
					<div class="service-header">	
					<h5>Servicios de TI</h5>
					</div>
					<div class="service-desc">
						<ul class="list-unstyled text-justify">
						<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Servicios de Call Center</li>
						<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Proyectos de actualización tecnológica</li>
						<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Consultoría para Data Center</li>
						<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Centros de servicio a equipos multimarca </li>
						<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Soluciones tecnológicas para Aerolíneas</li>	
						<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Administración de proyectos de software, infraestructura e integración </li>
						</ul>
					</div>
					<div class="service-fot">
					<a href="servicios.php" class="btn btn-skin">
						<span class="glyphicon glyphicon-send"></span>&nbsp;
						Saber más</a>
					</div>
                </div>
				</div>
            </div>
			
			<div class="col-sm-4 col-xs-12">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/icons/rockjs.svg" width="60" class="wow bounceInUp" data-wow-delay="0.8s">
					</div>
					<br>
					<div class="service-header">	
					<h5>Transformación Digital RockJS <sup>®</sup></h5>
					</div>
					<div class="service-desc">
						<ul class="list-unstyled text-justify">
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Reutiliza la lógica de negocio de sus Sistemas Legados</li>
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Expone sus sistemas legados en navegadores Web</li>
							<li><span class="glyphicon glyphicon-ok color-6"></span>&nbsp;Intercambia información mediante Servicios Web Síncronos</li>
						</ul>
					</div>
					<div class="service-fot">
					<a href="http://www.focusonservices.com/rockjs/" class="btn btn-skin">
						<span class="glyphicon glyphicon-send"></span>&nbsp;
						Saber más</a>
					</div>
                </div>
				</div>
            </div>


        </div>
		</div>
		</div>
	</section>

<!-- -------------------------------------------------------------------- -->
<div id="about" class="container wow fadeInLeft" data-wow-delay="0.5s"><br>
  <div class="row">
  <br><br><br>
    <div class="col-sm-8">
		<h2>Buenas Prácticas </h2>
		<h4 class="text-justify">
		Los procesos y servicios que proveemos en Focus On Services están alineados a estándares y normas internacionales. </h4>
		<h4> ITIL y PMI forman parte de nuestro marco de trabajo en el cual nos basamos para la entrega de nuestros servicios.
		</h4>
    </div>
    <div class="col-sm-4">
	 <div class="service-icon">
		<span class="pe-7s-rocket pe-5x color-1 logo circ wow bounceInUp" data-wow-delay="1s"></span>
	</div>
    </div>
  </div>
</div>


	<!-- Section: dependences -->
	<?php 
	//*write contact form dependences*//
	writeFormContact();
	//*write map dependences*//
	writeMap();
	//*write footer dependences*//
	writeFooter();
	//*write JS dependences*//
	writejs();
	?>
<script>
    var videoPlayer = document.getElementById('videoPlayer');
    // Auto play, half volume.
    videoPlayer.play()
    videoPlayer.volume = 0.5;
    // Play / pause.
    videoPlayer.addEventListener('click', function () {
        if (videoPlayer.paused == false) {
            videoPlayer.pause();
            videoPlayer.firstChild.nodeValue = 'Play';
        } else {
            videoPlayer.play();
            videoPlayer.firstChild.nodeValue = 'Pause';
        }
    });
	
function idioma() { 
    if (videoPlayer.paused) 
        videoPlayer.play(); 
    else 
        videoPlayer.pause(); 
}
</script>

<script>
	jQuery(document).ready(function(){
  $(".oculto").hide();              
    $(".inf").click(function(){
          var nodo = $(this).attr("href");  
 
          if ($(nodo).is(":visible")){
               $(nodo).hide();
               return false;
          }else{
        $(".oculto").hide("slow");                             
        $(nodo).fadeToggle("fast");
        return false;
          }
    });
}); 
</script>

  <!-- Modal -->
  <div class="modal fade" id="bra" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
		  <img src="video/Brazil.png"><p>bem-vindo a Focus On Services</p>
        </div>
        <div class="modal-body">
		<iframe width="100%" height="450"  src="video/bra.html" style="border:none;"></iframe>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="eu" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
		  <img src="video/Usa.png"><p>Welcome to Focus On Services</p>
        </div>
        <div class="modal-body">
		<iframe width="100%" height="450"  src="video/eu.html" style="border:none;"></iframe>
        </div>
      </div>
    </div>
  </div>

</body>
</html>