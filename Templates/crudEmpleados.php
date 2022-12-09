

<?php 

//session_start();
// require_once('Model/conexion.php');
// include_once('Model/consultasCuenta.php');
$inputBuscar=$_POST["buscarArt"] ?? "";
      // $inputBuscar=$errorBuscar ?? $_POST["buscarArt"] ?? False;
      // if (!empty($inputBuscar) and !isset($errorBuscar)) {
      //si utiliza Header hacerlo siempre arriba de la etiqueta 
      //   header('location:crudEmpleados2.php?id='.$_POST["buscarArt"]);  
      // } 
      // $inputBotonNombre=$_POST["buscarEmpleado"] ?? "";
      // $inputNombre=$datosBuscados["nombreEmpleado"] ?? "";
      // $inputDni=$datosBuscados["dniEmpleado"] ?? "";
      // $inputTelefono=$datosBuscados["telefonoEmpleado"] ?? "";
      // $inputFechaNac=$datosBuscados["fechaNacEmpleado"] ?? "";
      //$inputBotonNombre=$_POST["buscarArt"] ?? "";
$inputNombre=$datosBuscados["nombreArt"] ?? "";
$inputDescripcion=$datosBuscados["descripcionArt"] ?? "";
$inputPrecio=$datosBuscados["precioArt"] ?? "";
$inputProveedor=$datosBuscados["proveedArt"] ?? "";
$inputCliente=$datosBuscados["clientArt"] ?? "";
$inputFechaSubida=$datosBuscados["fechaSubida"] ?? "";
$inputRutaArt=$datosBuscados["rutaArt"] ?? "";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il MERCATO</title>
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
<!--    <a href="index.php">Home</a>
 -->
  

  <!-- <h3>CRUD</h3> -->
<h1 class="mt-5 d-flex justify-content-center">DATOS DEL ARTICULO</h1>
<div class="container-fluid" style="background-color: darkred; height: 150vh; width: 140vh; scroll-margin-top: 10vh;">
<!--     <script type="text/javascript" src="Assets/js/bootstrap.min.js"></script>
</body>
</html> -->  
    <form method="POST">
      <form class="d-flex" role="search">
        <div class="container-fluid mb-5">
          <div class="col-12 col-md-4">
            <div class="row"> 
<div class="col-6"> 
    <input class="form-control me-2" type="search" placeholder="Ingrese algo" aria-label="Search" name="buscarArt"value="<?php echo $inputBuscar; ?>">
</div>
<div class="col-6">
                <!-- <div> -->
    <button class="btn btn-outline-info" type="submit" name="botonBuscar">Buscar</button>
</div>

<form method="POST">
    <!-- <p>Información</p> -->
     <div class="container-fluid">
      <div class="col-12 col-md-3">
        <div class="mb-3 col-12" style="width: 200px">
          <label class="form-label">Nombre Articulo</label>
          <input type="text" name="nombreArt" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese nombre Art" value="<?php echo $inputNombre;?>" >
          <!-- value="<?php echo $inputNombre;?>" -->
        </div>
        <div class="mb-3 col-12" style="width: 200px" >
          <label class="form-label">Descripcion</label>
          <input type="text" name="descripcionArt" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion" value="<?php echo $inputDescripcion;?>">
        </div>
        <div class="mb-3 col-12" style="width: 200px">
          <label class="form-label">Precio</label>
          <input type="text" name="precioArt" class="form-control" id="exampleFormControlInput1" placeholder="Precio" value="<?php echo $inputPrecio;?>">
        </div>

<!--             </div>
          </div>
        </div>
      </form>
    </form> -->
        <div class="mb-3 col-12" style="width: 200px">
          <label class="form-label">Proveedor</label>
          <input type="text" name="proveedArt" class="form-control" id="exampleFormControlInput1" placeholder="Proveedor" value="<?php echo $inputProveedor;?>">
        </div>
        <div class="mb-3 col-12" style="width: 200px">
          <label class="form-label">Cliente</label>
          <input type="text" name="clientArt" class="form-control" id="exampleFormControlInput1" placeholder="Cliente" value="<?php echo $inputCliente;?>">
        </div>
        <div class="mb-3 col-12" style="width: 200px">
          <label class="form-label">Fecha Subida</label>
          <input type="text" name="fechaSubida" class="form-control" id="exampleFormControlInput1" placeholder="Fecha Subida" value="<?php echo $inputFechaSubida;?>">
        </div>
        <div class="mb-3 col-12" style="width: 200px">
          <label class="form-label">Ruta Art.</label>
          <input type="text" name="rutaArt" class="form-control" id="exampleFormControlInput1" placeholder="Ruta Articulo" value="<?php echo $inputRutaArt;?>">
        </div>
        <body>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <button type="submit" name="botonGuardar">Guardar</button>
        </form>
      </div>
    </div>

<!-- <!DOCTYPE html>value="<?php echo $inputBuscar; ?>"
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il MERCATO</title>
  <link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
   <a href="index.php">Home</a> -->
 
  <!--  -->
  <!-- include('barraNavegacion.php'); -->

  <!-- <h3>CRUD</h3> -->
<!--     <form method="POST">

    <input type="text" name="buscarEmpleado" value="<?php echo $inputBuscar; ?>">
    <button type="submit" name="botonBuscar">Buscar</button>

    </form> -->
<!--     <form method="POST">
      <form class="d-flex" role="search">
        <div class="container-fluid mb-5" >
          <div class="col-3 col-md-4" style="margin-left: 150%";>
            <div class="row">
              <div class="col-6"> 
                <input class="form-control me-2" type="search" placeholder="Ingrese algo" aria-label="Search" name="buscarEmpleado" value="<?php echo $inputBuscar; ?>">
              </div>
              <div class="col-6">
                <button class="btn btn-outline-info" type="submit" name="botonBuscar">Buscar</button>
               </div>
            </div>
          </div>
        </div> 
      </form>
    </form> -->

    <?php  
      if(isset($errorBuscar)){
         echo "<p style='color:red;'>".$errorBuscar."</p>";

       }
       if(isset($errorModificar)){
         echo "<p style='color:orange;'>".$errorModificar."</p>";

       }
    ?>

<!--   <form method="POST">
    <p>Información Empleado</p>
 -->    <!-- <div class="container-fluid">
      <div class="col-12 col-md-3">
        <div class="mb-3">
          <label class="form-label">Nombre y apellido</label>
          <input type="text" name="nombreEmpleado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese nombre Empleado" value="<?php echo $inputNombre;?>">
        </div>
        <div class="mb-3">
          <label class="form-label">DNI</label>
          <input type="text" name="nombreDni" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese DNI" value="<?php echo $inputDni;?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Telefono</label>
          <input type="text" name="telefonoEmpleado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Telefono" value="<?php echo $inputTelefono;?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Fecha de Nacimiento</label>
          <input type="text" name="fechaNacEmpleado" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese Fecha de Nacimiento" value="<?php echo $inputFechaNac;?>">
        </div>
      </div>
    </div>  -->
<!--     Nombre y apellido<input type="text" name="nombreEmpleado" value="<?php echo $inputNombre;?>">
    <br><br>
    DNI<input type="text" name="dniEmpleado"value="<?php echo $inputDni;?>">
    <br><br>

    Telefono <input type="text" name="telefonoEmpleado"value="<?php echo $inputTelefono;?>">
    <br><br>
    Fecha Nacimiento<input type="text" name="fechaNacEmpleado" value="<?php echo $inputFechaNac;?>"> -->

<!--        <input type="submit" name="botonEnviar">
 -->  <!-- <input type="submit"> -->
    <!-- <br><br> -->
<!--   <input type="text" name="valorBuscar" hidden>
 -->    
 <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-12 col-md-5">
      <button class="btn btn-lg btn-dark" name="botonMostrar" type="submit">Listar</button>
    </div>
    <div class="col-12 col-md-5">
      <button class="btn btn-lg btn-dark" name="botonGuardar" type="submit">Guardar</button>
    </div>
    <div class="col-12 col-md-5">
      <button class="btn btn-lg btn-dark" name="botonModificar" type="submit" value="<?php echo $inputBuscar; ?>">Modificar</button>
    </div>
    <div class="col-12 col-md-5">
      <button class="btn btn-lg btn-dark" name="botonLimpiar" type="submit">Limpiar</button>
    </div>

    <div class="col-12 col-md-5">
      <button class="btn btn-lg btn-dark" name="botonEliminar" type="submit">Eliminar</button>
    </div>
  </div>


    

    
    
    
    
<!--     
  </div>
  
  </form> -->

  
<?php
    if (isset($buscar)) {
      echo'si';
      echo "
      <table border='1' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>PROVEEDOR</th>
            <th>CLIENTE</th>
            <th>FECHA SUBIDA</th>
            <th>RUTA ART</th>
        </tr>";
          while($datos = mysqli_fetch_array($buscar)){
                  echo'
                  <tr>
                    <td>'.$datos['idArt'].'</td>
                    <td>'.$datos['nombreArt'].'</td>
                    <td>'.$datos['descripcionArt'].'</td>
                    <td>'.$datos['precioArt'].'</td>
                    <td>'.$datos['proveedArt'].'</td>
                    <td>'.$datos['clientArt'].'</td>
                    <td>'.$datos['fechaSubida'].'</td>
                    <td>'.$datos['rutaArt'].'</td>
                  </tr>
                  
                  ';
              }
      echo '</table>';
      }
      ?>
            
  
    <script type="text/javascript" src="<?php echo ASSETS.'js/bootstrap.min.js'; ?>"></script>
</body>
</html>
