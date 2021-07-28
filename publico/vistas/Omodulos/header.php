  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a href="<?php echo $url; ?>" class="logo"><img class="logo-muni" src="<?php echo $servidor."vistas/img/plantilla/logo_5.png";?>" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo $url; ?>"><i class="bi bi-house-door-fill"></i>&nbsp Inicio</a></li>
          <li><a class="nav-link scrollto" href="publicaciones"><i class="bi bi-file-text"></i>&nbsp Publicaciones</a></li>
          <li class="dropdown"><a href="<?php echo $url; ?>"><span><i class="bi bi-file-text"></i>&nbsp San Juan del Oro</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="historia">Historia</a></li>
              <li><a href="himno">Himno del Distrito de San Juan del Oro</a></li>
              <li><a href="geografia">Geografia</a></li>
              <li><a href="ecografia">Ecografia</a></li>
              <li><a href="clima">Clima</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="<?php echo $url; ?>"><span><i class="bi bi-file-text"></i>&nbsp Municipalidad</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="mision-vision">Misión y Visión</a></li>
              <li><a href="organigrama">Organigrama</a></li>
              <li><a href="gerencias">Gerencias</a></li>
              <li><a href="consejomunicipal">Consejo Municipal</a></li>
              <li><a href="leyorganicamunicipalidad">Ley Organica de Municipalidades</a></li>
              <li><a href="directoriofuncionarios">Directorio de Funcionarios</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="<?php echo $url; ?>"><span><i class="bi bi-file-text"></i>&nbsp Gestión Municipal</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Normas Emitidas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Acuerdos de Consejo</a></li>
                  <li><a href="#">Decretos de Alcaldia</a></li>
                  <li><a href="#">Ordenanzas Municipales</a></li>
                  <li><a href="#">Resoluciones de Alcaldia</a></li>
                </ul>
              </li>
              <li><a href="#">Reporte de Procesos Judiciales</a></li>
              <li><a href="#">Saneamiento de Inmuebles</a></li>
              <li><a href="informacion-legal">Información Legal</a></li>
              <li><a href="#">Resoluciones de Gerencia Municipal</a></li>
              <li><a href="#">Resoluciones de Gerencia de Administracion</a></li>
              <li><a href="#">Resoluciones de la Sub Gerencia de Personal</a></li>
              <li><a href="#">Sistema de control Interno</a></li>
              <li><a href="#">Avisos Oficiales</a></li>
              <li><a href="#">Canasta Basica Familiar</a></li>
              <li><a href="#">Resoluciones de Demuna</a></li>
            </ul>
          </li>
          <li><a class="admin" href="<?php echo $servidor; ?>"><i class="bi bi-person-circle"></i>&nbsp Iniciar Sesión</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->