<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  	<?php

		session_start();

		$servidor = Ruta::ctrRutaServidor();

		$plantilla = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="'.$servidor.$plantilla["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/

		$url = Ruta::ctrRuta();

		/*=============================================
		MARCADO DE CABECERA
		=============================================*/

		$rutas = array();

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			$ruta = $rutas[0];

		}else{

			$ruta = "inicio";

		}

	?>

  <title>Inicio | Municipalidad Distrital de San Juan del Oro</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $url; ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo $url; ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $url; ?>vistas/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $url; ?>vistas/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $url; ?>vistas/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $url; ?>vistas/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo $url; ?>vistas/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo $url; ?>vistas/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo $url; ?>vistas/assets/css/style.css" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/mios.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/dscountdown.css">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

	<script src="<?php echo $url; ?>vistas/js/plugins/Chart.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/md5-min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/dscountdown.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/knob.jquery.js"></script>

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!--- <address>Denis Vasquez Canaza</address> -->
<body>



  <?php

	/*=============================================
	CABEZOTE
	=============================================*/
	include "Omodulos/topBar.php";
	include "Omodulos/header.php";

	echo '<main id="main">';

	/*=============================================
	CONTENIDO DIN??MICO
	=============================================*/

	$rutas = array();
	$ruta = null;
	$infoArticulos = null;
	$MClase = null;

	if(isset($_GET["ruta"])){
		
		$rutas = explode("/", $_GET["ruta"]);
		/*
		foreach ($rutas as $k => $j){
			echo $j;
			echo $k;
		}  
		*/
		$item = "ruta";
		$valor =  $rutas[0];

		/*=============================================
		URL'S AMIGABLES DE PUBLICACIONES
		=============================================*/

		$rutaArticulos = ControladorGeneral::ctrMostrarInfo("publicar", $item, $valor);
		
		if($rutas[0] == $rutaArticulos["ruta"]){

			$infoArticulos = $rutas[0];

		}

		/*=============================================
		LISTA BLANCA DE URL'S AMIGABLES
		=============================================*/

		if($ruta != null || $rutas[0] == "publicaciones"){

			$MClase = 0;
			include "Omodulos/blog.php";

		}else if($infoArticulos != null){
			
			include "Omodulos/blogInfo.php";

		}else if($rutas[0] == "buscador"){
			
			include "Omodulos/blogBuscador.php";

		}else if($rutas[0] == "CNoticia"){
			
			$MClase = 1;
			include "Omodulos/blog.php";

		}else if($rutas[0] == "CProxAct"){
			
			$MClase = 2;
			include "Omodulos/blog.php";

		}else if($rutas[0] == "CObrasRe"){
			
			$MClase = 3;
			include "Omodulos/blog.php";

		}else if($rutas[0] == "nesaPartes" || $rutas[0] == "infoCarousel" ){

			include "Omodulos/".$rutas[0].".php";

		}else if($rutas[0] == "historia" || $rutas[0] == "himno" || $rutas[0] == "biodiversidad" || $rutas[0] == "geografia" ){

			include "Omodulos/pages/san-juan-del-oro/".$rutas[0].".php";

		}else if($rutas[0] == "mision-vision" || $rutas[0] == "organigrama" || $rutas[0] == "gerencias" || $rutas[0] == "leyorganicamunicipalidad" ){

			include "Omodulos/pages/municipalidad/".$rutas[0].".php";

		}else if($rutas[0] == "informacion-legal"){

			include "Omodulos/pages/gestion-municipal/".$rutas[0].".php";

		}else if($rutas[0] == "inicio"){

			include "Omodulos/carousel.php";
			include "Omodulos/servicios.php";
			include "Omodulos/Inoticias.php";
			//include "Omodulos/infoCarousel.php";
			include "Omodulos/preguntasF.php";

		}else{

			include "Omodulos/error404.php";

		}

	}else{

		include "Omodulos/carousel.php";
		include "Omodulos/servicios.php";
		include "Omodulos/Inoticias.php";
		//include "Omodulos/infoCarousel.php";
		include "Omodulos/preguntasF.php";

	}

	echo '<input type="hidden" value="'.$url.'" id="rutaOculta">
	</main>';

	include "Omodulos/footer.php";

   ?>


  	<div id="preloader"></div>
  

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<!-- Vendor JS Files -->
	<script src="<?php echo $url; ?>vistas/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="<?php echo $url; ?>vistas/assets/vendor/aos/aos.js"></script>
	<script src="<?php echo $url; ?>vistas/assets/vendor/php-email-form/validate.js"></script>
	<script src="<?php echo $url; ?>vistas/assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?php echo $url; ?>vistas/assets/vendor/purecounter/purecounter.js"></script>
	<script src="<?php echo $url; ?>vistas/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?php echo $url; ?>vistas/assets/vendor/glightbox/js/glightbox.min.js"></script>
	<!-- Template Main JS File -->
	<script src="<?php echo $url; ?>vistas/assets/js/main.js"></script>


	<script src="<?php echo $url; ?>vistas/js/mios.js"></script>
	<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>

</body>

</html>