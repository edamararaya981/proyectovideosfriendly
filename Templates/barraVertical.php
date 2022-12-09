<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="Assets/css/estiloBarraVertical.css">
</head>
<body> -->
<!--   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> -->

<!-- </nav> -->
  <div class="position-fixed verticalNav " id="verticalNav">
    <div class="displayBlock" id="navVertical" style="whidth:100%;background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);">
      <nav class ="navbar text-white" style="whidth:100%; ">
        <ul class ="nav navbar-nav d-flex"style="whidth:100%;">
          <li class ="nav-item itemNavVertical text-white">
            <a class ="nav-link" href="<?php echo URL; ?>"> Principal</a>
          </li>
          <li class ="nav-item itemNavVertical">
            <a class ="nav-link" href="<?php echo URL.'index' ?>"> Ing. Datos Art</a>
          </li>
          <li class ="nav-item itemNavVertical">
            <a class ="nav-link" href="<?php echo URL.'ver' ?>"> Ver Archivos </a>
          </li>
          <li class ="nav-item itemNavVertical">
            <a class ="nav-link" href="<?php echo URL.'categorias' ?>">  Incuyo STUDIO  </a>
          </li>
          <li class ="nav-item itemNavVertical">
            <a class ="nav-link" href="<?php echo URL.'micuenta' ?>">  Mis Cuenta </a>
          </li>
<!--           <li class ="nav-item">
            <a class ="nav-link" href="#"> Contact </a>
          </li>
          <li class ="nav-item">
            <a class ="nav-link" href="#"> Blogs </a>
          </li> -->
        </ul>
      </nav>
    </div>
  </div>
  <div class="displayNone" id="navVertical2" style="whidth: 100%;">
    <nav class ="navbar" style="whidth: 100%;">
      <ul class ="nav navbar-nav d-flex" style="whidth: 100%;">
        <li class ="nav-item itemNavVertical">
         
          <i class="fa-solid fa-cart-plus" href="<?php echo URL; ?>"></i>
        </li>
        <li class ="nav-item itemNavVertical">
          <i class="fa-solid fa-table" href="<?php echo URL.'crudEmpleados' ?>"></i>
        </li>
        <li class ="nav-item itemNavVertical">
          <i class="fa-regular fa-folder-open" href="<?php echo URL.'ver'; ?>"></i>
          <!-- <a class ="nav-link" href="<?php echo URL.'ver'; ?>"> Archivos </a> -->
        </li>
        <li class ="nav-item itemNavVertical">
          <a class ="nav-link" href="<?php echo URL.'ver'; ?>">  Icon  </a>
        </li>
<!--           <li class ="nav-item">
            <a class ="nav-link" href="#"> Contact </a>
          </li>
          <li class ="nav-item">
            <a class ="nav-link" href="#"> Blogs </a>
          </li> -->
        </ul>
      </nav>
    </div>
  </div>


<!-- </body>
</html> -->