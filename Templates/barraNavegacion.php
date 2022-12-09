



<nav class="navbar bg-danger navbar noMarginNoPadding"id="horizontalNav">
  <div class="container-fluid noMarginNoPadding">
    <div class="row col-12 noMarginNoPadding" style="width:100%;">
      <div class="col-12 d-flex mt-1 mb-1" style="margin-left: 20;">
        <button class="btn btn-danger btn-sm" id="buttonNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-white" href="<?php echo URL; ?>">
        &nbspVIDEOS INCUYO</a>
      </div>

      <!-- '.URL."?cerrarSession=1".' -->

<!--       <div class="col-5 mt-1">
        <form class="d-flex" role="search" action="<?php echo URL.'buscar' ?>" name="search_form">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" name="" required>
          <button class="btn btn-outline-light" type="submit">Buscar
          </button>
        </form>
      </div> -->
     <div class="position-absolute top-50 start-100 translate-middle col-3 d-flex">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
              Prueba
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href=https://www.linkedin.com/in/eduardo-dami%C3%A1n-araya-77621a24/>Perfil</a></li>
              <li><a class="dropdown-item" href="./contenidoVideos">Art.VENTA</a></li> 
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href=".//micuenta">Cerrar Session</a></li>
            </ul>
          </li>
        </ul>
      </div>
<!-- '.$_SESSION['claveUsuario'].'
        <div class=col-4 mt-1 d-flex justify-content-center">
          <a class="btn btn-outline-light" href="'.URL.'micuenta/'.$_SESSION['claveUsuario'].'">Usuario:'.$_SESSION['claveUsuario'].'</a>
        </div>"'.URL."/?CerrarSession=1".'"';justify-content-center"

  -->
        <?php 
      if(isset($_SESSION['login'])){
        echo'
            <div class="col-4 d-flex">
              <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
                    Prueba
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item"></a></li>
                    <li><a class="dropdown-item"></a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="'.URL."?CerrarSession=1".'">Cerrar Session</a></li>
                  </ul>
                </li>
              </ul>
              </div>';
           
        }else{
          echo'
              <div class="position-absolute top-50 start-50 translate-middle col-3 d-flex">
                <a class="btn btn-outline-light" href="'.URL.'micuenta">ACCEDER</a>
              </div>';
      }
       ?>

 

      </div>
    </div>
  </div>
</nav>