    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Principales</h2>
          <p>FUNCIONARIOS</p>
        </header>

        <div class="row gy-4">

          <?php 
            $Objetos = ControladorGeneral::ctrMostrar("gerencias", "titulo", null, null, 0, 40, "ASC");

            if(!$Objetos){

              echo '
              <div class="col-xs-12 error404 text-center">
                <h1><small>¡Oops!</small></h1>
                <h2>Aún no hay Objetos en esta sección</h2>
              </div>
              ';

            }else{

              foreach ($Objetos as $key => $value) {
                
                echo '
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="member">
                    <div class="member-img">
                      <img src="'.$servidor.$value["portada"].'" class="img-fluid" alt="">
                      <div class="social">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>'.$value["encargado"].'</h4>
                      <span>'.$value["titulo"].'</span>
                      <p>'.$value["contacto"].'</p>
                    </div>
                  </div>
                </div>
                ';

              }

            }
          ?>

        </div>

      </div>

    </section><!-- End Team Section -->