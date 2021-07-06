<link rel="stylesheet" href="<?php echo RUTA_URL;?>css/private/nav/nav.css">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Tu plazoleta</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quienes somos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=RUTA_URL?>Productos/viewProducts" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=RUTA_URL?>Productos/viewProducts">Ver productos</a>
          <?php
            if($_SESSION["rol"]["rolName"] === "Administrador"){
              echo '<a class="dropdown-item" href="'.RUTA_URL.'Productos/managmentProducts">Administrar productos</a>';
            }
          ?>
        </div>
      </li>
    </ul>
    <div class="float-right">
      <div class="dropdown">
        <a class="dropdown-toggle" href="#" id="optionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="optionDropdown" id="optionsUser">
          <h5 class="dropdown-header"><?=$_SESSION["rol"]["userData"]->nombre?></h5>
          <h6 class="dropdown-header">Rol : <?=$_SESSION["rol"]["rolName"]?></h6>
          <a class="dropdown-item" href="">Cambiar contraseña</a>
          <a class="dropdown-item" href="<?=RUTA_URL?>index/log_out">Salir <i class="fa fa-times-circle"></i></a>
        </div>
      </div>
    </div>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>