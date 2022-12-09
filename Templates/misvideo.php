<?php 

function conectar(){
	$conexion = mysqli_connect("localhost","root","","videosincuyo");
	return $conexion;
}
function guardarArchivo(){
	$conexion = conectar();

	$hora = date('his', time());    
	$nombreArt = $hora.$_FILES['archivo']["name"];
	// echo $nombreArchivo;
	$ruta = "Assets/images".$nombreArt;
	mysqli_query($conexion,"INSERT INTO videos(nombreArt,rutaArt) VALUES('".$nombreArt."','".$ruta."')");
	// echo $ruta;
	move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);

}

?>
<h1 class="mt-5 d-flex justify-content-center">INCUYO STUDIO</h1>
<div class="container-fluid" style="background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple); height: 100%; width: 140vh; scroll-margin-top: 10vh;">

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manejo de archivos</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<button type="submit" name="botonGuardar">Guardar</button>
		
	</form>
	<?php 
		if(isset($_POST["botonGuardar"])){
			// $nombreArchivo = $_FILES['archivo']["name"];
			// $tipoArchivo=$_FILES["archivo"]["type"];
			// $tamañoArchivo=$_FILES["archivo"]["size"];

			// echo "Nombre: ".$nombreArchivo."<br>";
			// echo "Tipo: ".$tipoArchivo."<br>";
			// echo "Tamaño: ".($tamañoArchivo/1024)."<br>";

/*			$archivoTemporal =file_get_contents($_FILES["archivo"]["tmp_name"]);
			echo "Archivo Temporal:".$archivoTemporal;*/

			// $DateAndTime = date('m-d-Y h:i:s a', time());
			// $hora = date('his', time());    
			// $nombreArchivo = $hora.$_FILES['archivo']["name"];
			// // echo $nombreArchivo;
			// $ruta = "misArchivos/".$nombreArchivo;
			// echo $ruta;
			// move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
			guardarArchivo();
		}

	?>

</body>
</html>