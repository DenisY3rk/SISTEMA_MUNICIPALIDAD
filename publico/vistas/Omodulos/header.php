  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="<?php echo $url; ?>" class="logo"><img class="logo-muni" src="<?php echo $servidor."vistas/img/plantilla/logo_5.png";?>" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo $url; ?>"><i class="bi bi-house-door-fill"></i>&nbsp Inicio</a></li>
          <li><a class="nav-link scrollto" href="publicaciones"><i class="bi bi-file-text"></i>&nbsp Publicaciones</a></li>
          <li class="dropdown"><a href="<?php echo $url; ?>"><span><i class="bi bi-file-text"></i>&nbsp San Juan del Oro</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="historia">Historia</a></li>
              <li><a href="himno">Himno del Distrito de San Juan del Oro</a></li>
              <li><a href="geografia">Información Geografica</a></li>
              <li><a href="biodiversidad">Biodiversidad</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="<?php echo $url; ?>"><span><i class="bi bi-file-text"></i>&nbsp Municipalidad</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="mision-vision">Misión y Visión</a></li>
              <li><a href="organigrama">Organigrama</a></li>
              <li><a href="funcionarios">Principales Funcionarios</a></li>
              <li><a href="leyorganicamunicipalidad">Ley Organica de Municipalidades</a></li>
              
            </ul>
          </li>
          <li><a class="admin" href="<?php echo $servidor; ?>"><i class="bi bi-person-circle"></i>&nbsp Iniciar Sesión</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->