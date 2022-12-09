<?php 
//session_start();
//require_once('Model/conexion.php');
//include_once('Model/consultasCuenta.php');

function crearUsuario($conexion,$datosUsuario){
	echo "Prueba crearUsuario";
	$sql = "INSERT INTO usuarios(idUsuario,emailUsuario, claveUsuario) VALUES('".$datosUsuario[0]."','".$datosUsuario[1]."','".$datosUsuario[2]."')";
	//echo '<script type="text/javascript">alert('.$sql.')</script>';
	// echo $sql;
	$guardar = mysqli_query($conexion,$sql);
	$_SESSION['emailUsuario'] = $datosUsuario[1];
	$_SESSION['claveUsuario'] = $datosUsuario[2];
	$_SESSION['login'] = True;
	header('location:'.URL);
	//header('location:'.micuenta);

}
function loginUsuario($conexion,$datosUsuario){
	//echo "Prueba crearUsuario";
	$sql = "SELECT * FROM usuarios WHERE emailUsuario='".$datosUsuario["email"]."' AND claveUsuario= '".$datosUsuario["clave"]."'";
	$consulta = mysqli_query($conexion,$sql);
	if(mysqli_num_rows($consulta)>0){
		$datosEncontrados=mysqli_fetch_array($consulta);
		$_SESSION['emailUsuario'] = $datosUsuario[1];
		$_SESSION['claveUsuario'] = $datosEncontrados[2];
		$_SESSION['login'] = True;
		header('location:'.URL);
	}else{
		echo '<script>alert("contraseña mal");</script>';
	}



}

?>
<?php 
//session_start();
// require_once('Model/conexion.php');
// require_once('Model/consultasCuenta.php');

 if (isset($_POST['botonGuardar'])) {
	/*	echo $_POST['nombreEmpleado'];*/
		//$inputIdArt=$_POST["idArt"] ;
		$nombreArt=$_POST["nombreArt"] ;
		$descripcionArt=$_POST["descripcionArt"] ;
		$precioArt=$_POST["precioArt"] ;
		$proveedArt=$_POST["proveedArt"] ;
		$clientArt=$_POST["clientArt"] ;
		$fechaSubida=$_POST["fechaSubida"] ;
		$rutaArt=$_POST["rutaArt"] ;
		echo $nombreArt."<br>".$descripcionArt."<br>".$precioArt."<br>".$proveedArt."<br>".$clientArt."<br>".$fechaSubida."<br>".$rutaArt;
 
 // if (isset($_POST['botonGuardar'])) {
// 	/*	echo $_POST['nombreEmpleado'];*/

// 		$nombreEmpleado= $_POST['nombreEmpleado'];
// 		$dniEmpleado= $_POST['dniEmpleado'];
// 		$telefonoEmpleado= $_POST['telefonoEmpleado'];
// 		$fechaNacEmpleado= $_POST['fechaNacEmpleado'];
// 		echo $nombreEmpleado."<br>".$dniEmpleado."<br>".$telefonoEmpleado."<br>".$fechaNacEmpleado;

// 		$sql = "insert into informacionempleados(nombreEmpleado, dniEmpleado, telefonoEmpleado, fechaNacEmpleado) values 
// 		('".$nombreEmpleado."','".$dniEmpleado."','".$telefonoEmpleado."','".$fechaNacEmpleado."')";
// 		mysqli_query($conexion,$sql);

		$sql = "insert into videos(nombreArt, descripcionArt,precioArt, proveedArt, clientArt, fechaSubida, rutaArt) values
		('".$nombreArt."','".$descripcionArt."','".$precioArt."','".$proveedArt."','".$clientArt."','".$fechaSubida."','".$rutaArt."')";
		mysqli_query($conexion,$sql);
  }
  if (isset($_POST['botonMostrar'])) {
		$buscar = mysqli_query($conexion,"select * from videos");
		//delete videos from videosincuyo where idAlt='"idArt"'
/*		while($datos = mysqli_fetch_array($buscar)){
			// print_r($datos);
			echo $datos['nombreEmpleado']."<br>";
			echo $datos['fechaNacEmpleado']."<br>";
		}*/
		// echo "<br><br><hr>";
/* 		while($datos2 = mysqli_fetch_assoc($buscar)){
			print_r($datos2);
			// echo $datos['nombreEmpleado']."<br>";
		}*/
/* 		while($datos3 = mysqli_fetch_row($buscar)){
			print_r($datos3);
			// echo $datos['nombreEmpleado']."<br>";
		}*/
/* 		while($datos4 = mysqli_fetch_object($buscar)){
			print_r($datos4);
			// echo $datos['nombreEmpleado']."<br>";
		}*/
		
  }  
  if (isset($_POST['botonBuscar'])){
		$sql="select * from videos where idArt ='".$_POST['buscarArt']."'";
		$buscar = mysqli_query($conexion,$sql);
		if(mysqli_num_rows($buscar)>0){
			$datosBuscados=mysqli_fetch_array($buscar);
			// echo $datosBuscados['nombreEmpleado'];

		}else{
			$errorBuscar="Datos no encontrados";
		}
/*		$datosBuscados=mysqli_fetch_array($buscar);
		echo $datosBuscados['nombreEmpleado'];*/
		// var_dump($datosBuscados);
		// print_r($datosBuscados['nombreEmpleado']);
	
  }  
  if (isset($_POST['botonModificar'])){
  	 echo $_POST['botonModificar'];
  	if($_POST['botonModificar'] == False){
		$errorModificar = "Busque algo primero";
	}else{
		if ($_POST['botonModificar'] == "Datos no encontrados") {
			$errorModificar = "No existe el dato";
		}else{
			$idArt= $_POST['botonModificar'];
		  	$nombreArt= $_POST['nombreArt'];
			$descripcionArt= $_POST['descripcionArt'];
			$precioArt= $_POST['precioArt'];
			$proveedArt= $_POST['proveedArt'];
			$clientArt= $_POST['clientArt'];
			$fechaSubida= $_POST['fechaSubida'];
			$rutaArt= $_POST['rutaArt'];
			// $sql="update * from informacionempleados where idEmpleado ='".$_POST['buscarEmpleado']."'";
	  		// $sql="update informacionempleados set nombreEmpleado ='".$nombreEmpleado."','".$dniEmpleado."',"'.$telefonoEmpleado."','".$fechaNacEmpleado."';
/*	  		$sql="update informacionempleados set(nombreEmpleado, dniEmpleado, telefonoEmpleado, fechaNacEmpleado) values 
			('".$nombreEmpleado."','".$dniEmpleado."','".$telefonoEmpleado."','".$fechaNacEmpleado."') WHERE idEmpleado='".$idEmpleado."'";*/
			$sql="update videos set nombreArt='".$nombreArt."',descripcionArt='".$descripcionArt."',precioArt='".$precioArt."',proveedArt='".$proveedArt."',clientArt='".$clientArt."',fechaSubida='".$fechaSubida."',rutaArt='".$rutaArt."'  WHERE idArt='".$idArt."'";
			mysqli_query($conexion,$sql);
/*			$Modificar = mysqli_query($conexion,$sql);
			if(mysqli_fetch_array($Modificar)>0){
				$datosModificados=mysqli_fetch_array($Modificar);
				// echo $datosBuscados['nombreEmpleado'];

			}else{
				$errorModificar="Datos no encontrados2";
			}*/
		 	// }if (isset($_POST['botonLimpiar'])) {
		 	// 	$idArt =$_POST['botonLimpiar'];
		 	// 	//$buscar = mysqli_query($conexion,"Delete from videos where idArt=$idArt");
		 	// 	// $sql = "DELETE FROM videos WHERE id=".($_POST['botonEliminar']);
		 	// 	$sql = "DELETE FROM videos WHERE idArt=$idArt";
			// 	mysql_query($sql, $conexion);
			//  }if (isset($_POST['botonEliminar'])) {
			// /*	echo $_POST['nombreEmpleado'];*/
			// 	$inputIdArt=$_POST["idArt"] ;
			// 	$nombreArt=$_POST["nombreArt"] ;
			// 	$descripcionArt=$_POST["descripcionArt"] ;
			// 	$precioArt=$_POST["precioArt"] ;
			// 	$proveedArt=$_POST["proveedArt"] ;
			// 	$clientArt=$_POST["clientArt"] ;
			// 	$fechaSubida=$_POST["fechaSubida"] ;
			// 	$rutaArt=$_POST["rutaArt"] ;
			// 	echo $idArt."<br>".$nombreArt."<br>".$descripcionArt."<br>".$precioArt."<br>".$proveedArt."<br>".$clientArt."<br>".$fechaSubida."<br>".$rutaArt;
		 
		 // if (isset($_POST['botonGuardar'])) {
		// 	/*	echo $_POST['nombreEmpleado'];*/

		// 		$nombreEmpleado= $_POST['nombreEmpleado'];
		// 		$dniEmpleado= $_POST['dniEmpleado'];
		// 		$telefonoEmpleado= $_POST['telefonoEmpleado'];
		// 		$fechaNacEmpleado= $_POST['fechaNacEmpleado'];
		// 		echo $nombreEmpleado."<br>".$dniEmpleado."<br>".$telefonoEmpleado."<br>".$fechaNacEmpleado;

		// 		$sql = "insert into informacionempleados(nombreEmpleado, dniEmpleado, telefonoEmpleado, fechaNacEmpleado) values 
		// 		('".$nombreEmpleado."','".$dniEmpleado."','".$telefonoEmpleado."','".$fechaNacEmpleado."')";
		// 		mysqli_query($conexion,$sql);

				$sql = "DELETE from videos(idArt, nombreArt, descripcionArt,precioArt, proveedArt, clientArt, fechaSubida, rutaArt) values
				('".$idArt."','".$nombreArt."','".$descripcionArt."','".$precioArt."','".$proveedArt."','".$clientArt."','".$fechaSubida."','".$rutaArt."')";
				mysqli_query($conexion,$sql);

			// $sql = "DELETE FROM videos WHERE idArt='$idArt'";
			// $query =mysql_query($sql);
			// $query="SELECT *
			// FROM videos
			// ";
			// $result=mysql_query($query,$conn);
			// $row=mysql_fetch_array($result);
			// while ($row) {
			//  printf("Nombre: {$row['nombreArt']} {$row['descripcionArt']}<br>");
			//  $row=mysql_fetch_array($result);
} 
		

		 	// }mysqli_connect_errno(){
			// 	echo "Failed to connect to MySQL: ".mysqli_connect_errno();
			//  if (isset($_POST['botonMostrar'])) {
			// $buscar = mysqli_query($conexion,"select * from videos");

			// }if(isset($_REQUEST['idArt'])){
			// 	$buscar = mysqli_query($conexion,"DELETE FROM videos WHERE idArt=".$_REQUEST['idArt']);
				//$result= mysqli_query($conexion, $query);
				// if($result){
				// 	echo "Registro borrado correctamente";
				// 	header('location: index.php')
				// }else{
				// 	echo "Error al borrar el registro";
			// }

		  }
			// // <?php 
			// if(!isset($_POST['idArt'])){
			//     header('Location: crudEmpleados.php');
			// }else{
			//     include('conexion.php');
			//     $idArt = $_POST['idArt'];

			//     $consulta = $con -> prepare("DELETE FROM videos WHERE idArt=?;");
			//     $result = $consulta->execute([$idArt]);

			//     if($result == true){
			//         echo "Eliminado";
			//     }else{
			//         echo "Error de Eliminacion";
			//     }

			//   }
		    if (isset($_POST['botonEliminar'])){
				$sql="delete * from videos where idArt ='".$_POST['buscarArt']."'";
				$buscar = mysqli_query($conexion,$sql);
			// $sql="update videos set nombreArt='".$nombreArt."',descripcionArt='".$descripcionArt."',precioArt='".$precioArt."',proveedArt='".$proveedArt."',clientArt='".$clientArt."',fechaSubida='".$fechaSubida."',rutaArt='".$rutaArt."'  WHERE idArt='".$idArt."'";
			// mysqli_query($conexion,$sql);

			}

		}
		

			


		
	


	
?>
