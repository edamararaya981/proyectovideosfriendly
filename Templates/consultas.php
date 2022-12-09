<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
function conectar(){
	$conexion = mysqli_connect("localhost","root","","videosincuyo");
	return $conexion;
}  
function ingresar(){
	$email = $_POST['inputEmail'];
	$clave = $_POST['inputClave'];
	$claveEncriptada = crypt($clave,"incuyo"); 
	$conexion = conectar();
	$sql = "SELECT * FROM usuarios WHERE emailUsuario = '".$email."' AND claveUsuario='".$claveEncriptada."' ";
	$consulta = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($consulta) > 0) {
		$_SESSION['email'] = $email;
		mysqli_close($conexion);
		header('location:index.php');
	}else{
		echo '<script type="text/javascript">alert("Email o contraseña incorrecta")</script>';
		mysqli_close($conexion);
	}
	
}
function registrar(){
	$email = $_POST['inputEmail'];
	$clave = $_POST['inputClave'];
	$clave2 = $_POST['inputClave2'];
	if ($clave == $clave2) {
		try {
			$claveEncriptada = crypt($clave,"incuyo");
			$conexion = conectar();
			$sql = "INSERT INTO usuarios(emailUsuario,claveUsuario) VALUES('".$email."','".$claveEncriptada."')";
			$consulta = mysqli_query($conexion,$sql);
			$_SESSION['email'] = $email;
			header('location:index.php');
				
		} catch (mysqli_sql_exception $e) {
			echo '<script type="text/javascript">alert("Email no disponible")</script>';
		}

	}else{
		echo '<script type="text/javascript">alert("Claves no coinciden")</script>';
	}

}
?>