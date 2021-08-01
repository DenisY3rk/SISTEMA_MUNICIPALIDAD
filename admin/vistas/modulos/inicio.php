<?php

//include("contenidoLTE.php");

?>

<!--=====================================
PÁGINA DE INICIO
======================================-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">INICIO</h1>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      
    
      <?php

        if($_SESSION["perfil"] == "administrador"){

          include "inicio/cajas-superiores.php";

          include "inicio/grafico-All.php";

        }

      ?>
    
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">

         
            <!-- /.col -->

            <div class="col-md-6">
              
            <?php

              if($_SESSION["perfil"] == "administrador"){

              }

            ?>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        


      
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
