<!--=====================================
MENU
======================================-->	

      
<br>
<!-- SidebarSearch Form -->
<div class="form-inline">
  <div class="input-group" data-widget="sidebar-search">
    <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Buscar">
    <div class="input-group-append">
     
      <button class="btn btn-sidebar">
        <i class="fas fa-search fa-fw"></i>
      </button>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    


    <li class="nav-header">GESTOR DE VISTAS</li>

    <?php

      if($_SESSION["perfil"] == "administrador"){

        echo '
          <li class="nav-item">
            <a href="carrusel" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Carrusel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="publicacion" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Publicaciones
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pvideos" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Videos
              </p>
            </a>
          </li>
        <li class="nav-item">
          <a href="funcionarios" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Funcionarios
              </p>
          </a>
        </li>
        ';
      }
      else if($_SESSION["perfil"] == "editor"){
        echo '
        <li class="nav-item">
          <a href="carrusel" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Carrusel
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="publicacion" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Publicaciones
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pvideos" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Videos
            </p>
          </a>
        </li>
      <li class="nav-item">
        <a href="funcionarios" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
            <p>
              Funcionarios
            </p>
        </a>
      </li>
      ';
      }

    ?>
    
    
    <?php

      if($_SESSION["perfil"] == "administrador"){

        echo '
          <li class="nav-header">GESTOR DE CUENTAS</li>
          <li class="nav-item">
            <a href="perfiles" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Gestor de Perfiles
              </p>
            </a>
          </li>
        ';

      }

    ?>
    
    
  </ul>
</nav>
<!-- /.sidebar-menu -->
