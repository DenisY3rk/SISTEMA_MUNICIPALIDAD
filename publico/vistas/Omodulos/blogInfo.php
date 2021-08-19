<?php

  $mda = json_decode($rutaArticulos["multimedia"],true);

?>


      <!-- ======= Blog Single Section ======= -->
      <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                



              
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
                  <div class="carousel-indicators">

                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <?php
                      for($i = 1; $i <= count($mda); ++$i) {
                        echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$i.'" aria-label="Slide 2"></button>';
                      }
                    ?>
                    
                  </div>
                  <div class="carousel-inner">  
                    
                    <?php

                      echo '
                      <div class="carousel-item active">
                        <img src="'.$servidor.$rutaArticulos["portada"].'" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                      ';
                      
                      for($i = 0; $i < count($mda); ++$i) {

                        echo '
                        <div class="carousel-item">
                          <img src="'.$servidor.$mda[$i]["foto"].'" class="d-block w-100" alt="...">
                          <div class="carousel-caption d-none d-md-block">
                          </div>
                        </div>
                        ';
                        
                      }
                    ?>

                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                  </button>
                </div>




                
              
              </div>


              <h2 class="entry-title">
                <a href="#"><?php echo $rutaArticulos["titulo"]; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01"><?php echo $rutaArticulos["fecha"]; ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>MDSJO</li>
                </ul>
              </div>

              <div class="entry-content">
                <p style="text-align: justify;texto-justify: inter-palabra;">
                  <?php echo $rutaArticulos["descripcion"]; ?>
                </p>

              </div>

              

            </article><!-- End blog entry -->

            

            <div class="blog-comments">           
              <div id="comment-1" class="comment">
                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                  </div>
                </div><!-- End comment reply #1-->
              </div><!-- End comment #1-->
            </div><!-- End blog comments -->
            
          </div><!-- End blog entries list -->


          <div class="col-lg-4">

            <?php 
              include "sidebarBlog.php";
            ?>

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->