<?php 

function conectar(){
	$server = "localhost";
	$usuario ="root";
	$clave = "";
	$nombreBD = "videosincuyo";
	$conexion = mysqli_connect($server,$usuario,$clave,$nombreBD);
	return $conexion;

}
$conexion=mysqli_connect("localhost","root","","videosincuyo");
?>	
