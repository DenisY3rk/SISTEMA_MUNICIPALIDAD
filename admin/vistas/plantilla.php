<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Municipalidad Distrital de San Juan del Oro</title>
  <link rel="icon" href="vistas/img/plantilla/icono.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">



  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="vistas/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="vistas/plugins/toastr/toastr.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="vistas/plugins/bs-stepper/css/bs-stepper.min.css">
  


  <!--=====================================
  PLUGINS DE CSS
  ======================================-->
  <!-- dropzonejs -->
  <link rel="stylesheet" href="vistas/plugins/dropzone/dropzone.css">
  <!--=====================================
  CSS PERSONALIZADO
  ======================================-->
  <link rel="stylesheet" href="vistas/css/mios.css">
  <!--=====================================
  PLUGINS DE JAVASCRIPT
  ======================================-->
  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="vistas/plugins/toastr/toastr.min.js"></script>
  <!-- dropzonejs -->
  <script src="vistas/plugins/dropzone/dropzone.js"></script>
    
</head>
<!--- <address>Denis Vasquez Canaza</address> -->
<body class="hold-transition <?php if(isset($_SESSION["estiloPantalla"]) && $_SESSION["estiloPantalla"] == 1){ echo 'dark-mode'; } ?>  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php

 if(isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok"){

    echo '<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <h2 style="font-weight: bold;" class="animation__wobble">LOADING...</h2>
    </div>
    ';

     include "modulos/cabezote.php";
     include "modulos/lateral.php";

     $rutas = array();

     if(isset($_GET["ruta"])){

        $rutas = explode("/", $_GET["ruta"]);
        $item = "ruta";

        if($_GET["ruta"]== "inicio" ||
           $_GET["ruta"]== "usuarios" ||
           $_GET["ruta"]== "perfiles" ||
           $_GET["ruta"]== "publicacion" ||
           $_GET["ruta"]== "pvideos" ||
           $_GET["ruta"]== "carrusel" ||
           $_GET["ruta"]== "gerencias" ||
           $_GET["ruta"]== "salir"){
          
          include "modulos/".$_GET["ruta"].".php";
        }else{
          include "modulos/error404.php";
        }
        
     }else{
       include "modulos/inicio.php";
     }

    include "modulos/footer.php";

    echo '</div>';

 }else{
  include "modulos/login.php";
 }
 
?>


        <!--=====================================
        JS PERSONALIZADO
        ======================================-->
        <script src="vistas/js/gestorAdministradores.js"></script>
        <script src="vistas/js/gestorPublicacion.js"></script>
        <script src="vistas/js/gestorUsuarios.js"></script>
        <script src="vistas/js/gestorNotificaciones.js"></script>
        <!-- ./wrapper -->


        <!-- REQUIRED SCRIPTS -->
      
        <!-- Bootstrap -->
        <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="vistas/dist/js/adminlte.js"></script>
        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="vistas/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="vistas/plugins/raphael/raphael.min.js"></script>
        <script src="vistas/plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="vistas/plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <!-- ChartJS -->
        <script src="vistas/plugins/chart.js/Chart.min.js"></script>

        <!-- AdminLTE for demo purposes 
        <script src="vistas/dist/js/demo2.js"></script>-->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="vistas/dist/js/pages/dashboard2.js"></script>


        <!-- DataTables  & Plugins -->
        <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="vistas/plugins/jszip/jszip.min.js"></script>
        <script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

       
        <!-- InputMask -->
        <script src="vistas/plugins/moment/moment.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

        
        <script src="vistas/js/complementos.js"></script>
        <!-- BS-Stepper -->
        <script src="vistas/plugins/bs-stepper/js/bs-stepper.min.js"></script>

</body>
</html>
