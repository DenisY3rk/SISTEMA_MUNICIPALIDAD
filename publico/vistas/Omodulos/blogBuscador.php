    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" >

        <div class="row">
          <div class="col-lg-8 entries">
            <section id="recent-blog-posts" class="recent-blog-posts">
              <div class="row">

                <?php
        
                    /*=============================================
                    LLAMADO DE PAGINACIÓN
                    =============================================*/

                    if(isset($rutas[1])){

                        $base = ($rutas[1] - 1)*8;
                        $tope = 8;

                    }else{

                        $rutas[1] = 1;
                        $base = 0;
                        $tope = 8;
                        
                    }


                    $Objetos = null;
                    $listaObjetos = null;

                    if(isset($rutas[3])){

                        $busqueda = $rutas[3];

                        $Objetos = ControladorGeneral::ctrBuscar("publicar", $busqueda, "titulo", "DESC", $base, $tope);
                        $listaObjetos = ControladorGeneral::ctrListarBusqueda("publicar", $busqueda);

                    }

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
                            <div class="col-lg-6" data-aos="fade-up">
                            <div class="post-box">
                                <div class="post-img"><img src="'.$servidor.$value["portada"].'" class="img-fluid" alt=""></div>
                                <span class="post-date">'.$value["fecha"].'</span>
                                <h3 class="post-title">'.$value["titulo"].'</h3>
                                <a href="'.$url.$value["ruta"].'" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                            </div>
                            ';

                        }

                    }
                
                ?>

              </div>
            </section><!-- End Recent Blog Posts Section -->


            <section id="blog" class="blog">
                <div class="entries">
                <div class="blog-pagination">
                  <ul class="justify-content-center">
                  
                  <!--=====================================
                  PAGINACIÓN
                  ======================================-->
                  
                  <?php

                    if($listaObjetos != 0){

                        $pagProductos = ceil($listaObjetos/8);

                        if($pagProductos > 4){

                            /*=============================================
                            LOS BOTONES DE LAS PRIMERAS 4 PÁGINAS Y LA ÚLTIMA PÁG
                            =============================================*/

                            if($rutas[1] == 1){

                                for($i = 1; $i <= 4; $i ++){
                                    echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';
                                }

                                echo '
                                <li class="disabled"><a>...</a></li>
                                <li id="item'.$pagProductos.'"><a href="'.$url.$rutas[0].'/'.$pagProductos.'/'.$rutas[2].'/'.$rutas[3].'">'.$pagProductos.'</a></li>
                                <li><a href="'.$url.$rutas[0].'/2/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                ';

                            }

                            /*=============================================
                            LOS BOTONES DE LA MITAD DE PÁGINAS HACIA ABAJO
                            =============================================*/

                            else if($rutas[1] != $pagProductos && 
                                    $rutas[1] != 1 &&
                                    $rutas[1] <  ($pagProductos/2) &&
                                    $rutas[1] < ($pagProductos-3)
                                    ){

                                    $numPagActual = $rutas[1];

                                    echo '<li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> ';
                                
                                    for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){
                                        echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';
                                    }

                                    echo '
                                    <li class="disabled"><a>...</a></li>
                                    <li id="item'.$pagProductos.'"><a href="'.$url.$rutas[0].'/'.$pagProductos.'/'.$rutas[2].'/'.$rutas[3].'">'.$pagProductos.'</a></li>
                                    <li><a href="'.$url.$rutas[0].'/'.($numPagActual+1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    ';

                            }

                            /*=============================================
                            LOS BOTONES DE LA MITAD DE PÁGINAS HACIA ARRIBA
                            =============================================*/

                            else if($rutas[1] != $pagProductos && 
                                    $rutas[1] != 1 &&
                                    $rutas[1] >=  ($pagProductos/2) &&
                                    $rutas[1] < ($pagProductos-3)
                                    ){

                                    $numPagActual = $rutas[1];
                                
                                    echo '
                                    <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
                                    <li id="item1"><a href="'.$url.$rutas[0].'/1/'.$rutas[2].'/'.$rutas[3].'">1</a></li>
                                    <li class="disabled"><a>...</a></li>
                                    ';
                                
                                    for($i = $numPagActual; $i <= ($numPagActual+3); $i ++){
                                        echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';
                                    }

                                    echo '<li><a href="'.$url.$rutas[0].'/'.($numPagActual+1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>';
                            }

                            /*=============================================
                            LOS BOTONES DE LAS ÚLTIMAS 4 PÁGINAS Y LA PRIMERA PÁG
                            =============================================*/

                            else{

                                $numPagActual = $rutas[1];

                                echo '
                                <li><a href="'.$url.$rutas[0].'/'.($numPagActual-1).'/'.$rutas[2].'/'.$rutas[3].'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li> 
                                <li id="item1"><a href="'.$url.$rutas[0].'/1/'.$rutas[2].'/'.$rutas[3].'">1</a></li>
                                <li class="disabled"><a>...</a></li>
                                ';
                                
                                for($i = ($pagProductos-3); $i <= $pagProductos; $i ++){
                                    echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';
                                }

                            }

                        }else{

                            for($i = 1; $i <= $pagProductos; $i ++){
                                echo '<li id="item'.$i.'"><a href="'.$url.$rutas[0].'/'.$i.'/'.$rutas[2].'/'.$rutas[3].'">'.$i.'</a></li>';
                            }

                        }

                    }


                    ?>

                  </ul>
                </div>
                </div>
              </section>

          </div><!-- End blog entries list -->

          <div class="col-lg-4" data-aos="fade-up">

            <?php 
              include "sidebarBlog.php";
            ?>

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
