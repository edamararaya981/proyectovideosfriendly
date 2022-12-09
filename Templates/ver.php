<!-- 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proyecto Videos</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
</head>
<body>
    <h1 class="bg-dark text-white">Proyecto</h1>
 -->
<!--  <h1 class="mt-5 d-flex justify-content-center">VER VIDEOS</h1>
 <div class="container-fluid" style="background-color: darkred; height: 150vh; width: 140vh; scroll-margin-top: 10vh;">
 <div class="container-fluid">
	<div class="row">
	            <div class="col-2">
                 <div class="col-12">
	<video id="videoPlayer" width="320" height="240" controls>
		<source src="Assets/videos/katsuda 27022018.mp4" type="video/mp4">  
                  <source src="movie.ogg" type="video/ogg"> -->
	<!-- Your browser does not support the video tag -->

<!-- </video>            
</div>
</div>      
</div> -->

<h1 class="mt-5 d-flex justify-content-center">Mis Videos</h1>
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
		// echo '<iframe src="'.$datos["rutaArt"].'"height="200px" width="200px" type="video/mp4"></iframe>';
/*		echo '
		<figure>
  		<img src="misArchivos/"'.$datos["rutaArchivo"].'"">
		</figure>';*/
		//<img src="misArchivos/"'.$datos["rutaArchivo"].'"">';
		echo'<video id="videoPlayer" width="320" height="240" controls>
  		<source src="'.$datos["rutaArt"].'" type="video/mp4">
		</video>';
	}
	//move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);'.$datos["rutaArt"].'
	//<source src="http://localhost/incuyo2022/ProyectoVideosFriendly/Assets/videos" type="video/mp4">
	// <video id="videoPlayer" width="320" height="240" controls>
  	// 	<source src="https://www.youtube.com/watch?v=YlPk68ITnuM" type="video/mp4">
	// </video>;
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
	<!-- <?php buscarArchivo();?> -->
	<iframe src="https://es.wikipedia.org/wiki/Wikipedia:Portada"> 
  		<!-- <source src="https://www.youtube.com/watch?v=YlPk68ITnuM" type="video/mp4"> -->
	</iframe>


</body>
</html>