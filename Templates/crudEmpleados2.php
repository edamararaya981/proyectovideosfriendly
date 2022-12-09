<?php 
session_start();
require_once('Model/conexion.php');
//include_once('Model/consultasCuenta.php');

$idArt = $_GET['idArt'] ?? False;
if ($idArt == False) {
	header('location: index.php');

}
// $sql="SELECT * FROM informacionempleados WHERE idEmpleado='".$idEmpleado."'";
$sql="SELECT * FROM videos WHERE idArt='".$idArt."'";
$buscar=mysqli_query($conexion,$sql);
// $datosBuscados=mysqli_fetch_array($buscar);	
if (mysqli_num_rows($buscar)>0){
	$datosBuscados=mysqli_fetch_array($buscar);	
	$inputArt=$datosBuscados["nombreArt"] ;
	$inputDescripcion=$datosBuscados["descripcionArt"] ;
	$inputPrecio=$datosBuscados["precioArt"] ;
	$inputProveedor=$datosBuscados["proveedArt"] ;
	$inputClient=$datosBuscados["clientArt"] ;
	$inputFechaSubida=$datosBuscados["fechaSubida"] ;
	$inputRuta=$datosBuscados["rutaArt"] ;

	// $inputBotonNombre=$_POST["buscarArt"] ?? "";
    // $inputNombre=$datosBuscados["nombreArt"] ?? "";
    // $inputDescripcion=$datosBuscados["descripcionArt"] ?? "";
    // $inputPrecio=$datosBuscados["precioArt"] ?? "";
    // $inputFechaSubida=$datosBuscados["fechaSubida"] ?? "";
    // $inputRutaVideo=$datosBuscados["rutaArt"] ;?? "";
}else{
	header('location: index.php');
}




?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
	CRUD EMPLEADOS 2 CON DATO ENCONTRADO
	<form method="POST">
    <p>Información Empleado</p>
    Nombre y apellido<input type="text" name="nombreEmpleado" value="<?php echo $inputNombre;?>">
  	<br><br>
  	DNI<input type="text" name="dniEmpleado"value="<?php echo $inputDni;?>">
  	<br><br>

  	Telefono <input type="text" name="telefonoEmpleado"value="<?php echo $inputTelefono;?>">
  	<br><br>
  	Fecha Nacimiento<input type="text" name="fechaNacEmpleado" value="<?php echo $inputFechaNac;?>">

   	<input type="submit" name="botonEnviar">
   <input type="submit"> 
  	<br><br>
   <input type="text" name="valorBuscar" hidden>
  	<button name="botonMostrar" type="submit">Mostrar</button>

 	<button name="botonGuardar" type="submit">Guardar</button>
 	
 	<button name="botonModificar" type="submit" value="<?php echo $inputBuscar; ?>">Modificar</button>
 	
 	<button name="botonEliminar" type="submit">Eliminar</button>
  	
  </form> 
   <script src="Assets/js/bootstrap.bundle.min.js"></script>
 </body>
</html>  -->