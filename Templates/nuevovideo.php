<h1 class="mt-5 d-flex justify-content-center">Mis Archivos</h1>
<div class="container-fluid" style="background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple); width: 140vh; scroll-margin-top: 10vh;">

<?php 
require_once('Model/conexion.php');
//require_once('Controller/controller.php');

// function conectar(){
// 	$conexion = mysqli_connect("localhost","root","","videosincuyo");
// 	return $conexion;
// }
function buscarArchivo(){
	$conexion = conectar();

	// $hora = date('his', time());    
	// $nombreArchivo = $hora.$_FILES['archivo']["name"];
	// // echo $nombreArchivo;
	// $ruta = "misArchivos/".$nombreArchivo;
	//$buscar =mysqli_query($conexion,"SELECT * FROM archivos);
	$buscar =mysqli_query($conexion,"SELECT * FROM videos");
	while ($datos = mysqli_fetch_array($buscar)) {
		echo $datos["idArt"]."<br>";
		echo $datos["nombreArt"]."<br>";
		echo $datos["descripcionArt"]."<br>";
		echo $datos["precioArt"]."<br>";
		echo $datos["proveedArt"]."<br>";
		echo $datos["clientArt"]."<br>";
		echo $datos["fechaSubida"]."<br>";
		echo $datos["rutaArt"]."<br>";
		// echo '<embed src="'.$datos["rutaArchivo"].'" type="application/pdf" width="100%" height="600px" />';
		echo '<iframe src="'.$datos["rutaArt"].'" height="200px" width="200px" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
/*		echo '
		<figure>
  		<img src="misArchivos/"'.$datos["rutaArchivo"].'"">
		</figure>';*/
		//<img src="misArchivos/"'.$datos["rutaArchivo"].'"">';
		// <video width="320" height="240" controls>
  		// <source src="'.$datos["rutaArchivo"].'" type="png">
		// </video>';
	}
	//move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ver Archivos	</title>
</head>
<body>
	<?php buscarArchivo();?>

</body>
</html> 
