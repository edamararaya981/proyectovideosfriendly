 <div class="container-fluid pt-5 cuenta" style="background-color: #df4759; border-bottom: 65vh solid #efefef; height: 100%;">
	<div class="container col-5 pt-3" style="background-color:white; border-radius: 10px; height: 70vh; z-index:1">
		<div class="d-flex justify-content-center">
			<h4 class="mb-4 mt-2">Bienvenido a VIDEOS INCUYO</h4>
			
		</div>
		<?php 
		if (isset($parametros['verificarEmail']) and $parametros['verificarEmail']) {
			echo '	
			<form method="POST" class="mb-3">

				<div class="input-group d-flex">
					<span class=col-3 input-group-text">Usuario</span>
					<input type="text" name="inputUsuarioRegistro"
					class="form-control" placeholder="Ingresa tu usuario" requerid>
				</div>
				<div class="input-group mb-3 mt-3 d-flex">
					<span class=col-3 input-group-text">			
					Contraseña</span>
					<input type="password"
						id="passwordReg"
						name="inputPasswordRegistro"
						class="form-control"
						placeholder="Ingresa tu contraseña" requerid>
					<a id="verPass" class="btn btn-outline-dark"
					onclick="verPassword()"><i id="iconoPass" class="fa fa-eye-slash" aria-hidden="true"></i></a>
					</div>
					<div class="input-group mb-3 mt-3 d-flex">
						<span class="col-3"
						input-group-text">Confirmacion></span>
						<input type="password" id="confirmarPassReg"
							name="inputConfPasswordRegistro"
							class="form-control" placeholder="Repetí tu constraseña" requerid>
						<a id="verPass" class="btn btn-outline-dark"
						onclick="verPassword2()"><i id="iconoPass2"
						class="fa fa-eye-slash" aria-hidden="true"></i></a>
						</div>
						<div class="mt-2 mb-2 d-flex justify-content-center">
						<button type="submit" id="botonRegistroFinal"
						name="botonRegistroFinal" class="btn btn-lg btn-danger">CrearCuenta</button>
					</div>
					<a class="btn btn-sm btn-outline-danger" href="'.URL.'registro">Volver</a>

				</form>';
				

			}else{
				echo '
				<div class="d-flex justify-content-start">
					<h5 class="mb-4"> Ingresa tu email</h5>
				</div>
				<form method="POST" class="mb-5">';
				if (isset($parametros['verificarEmail']) and !$parametros['verificarEmail']) {
					echo '
					<div>
						<input type="email" name="inputEmailRegistro" id="botonRegistroFinal"
						class="form-control" aria-describedby="emailHelp" value="'.$parametros['email'].'" required>
					</div>
					<span class="text-danger">&nbsE-mail no disponible</span><br>';
				}else{
					echo '
					<div>
					<input type="email" name="inputEmailRegistro"
						class="form-control" aria-describedby="emailHelp" required>
					</div>';
				}
				echo '
				<div class="mt-4 d-flex justify-content-center">
					<button type="submit" name="botonRegistroSiguiente" class="btn btn-lg btn-danger">Siguiente</button>

				</div>
				</form>';
			}
			?>
			<a class="link-success" href="<?php echo URL.'micuenta'; ?>">Ya tengo cuenta</a> 

 
<!-- 
// require_once("controller.php"); 
// if (isset($_POST['botonRegistrar'])) {
// 	registrar();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página web</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
<body>
 	<?php require_once("navbar.php"); ?>
	<div class="container col-5 mt-5">
		<form method="POST">
			<div class="mb-3">
			  <label class="form-label">E-mail</label>
			  <input type="email" name="inputEmail" class="form-control"  placeholder="Ingrese su e-mail" required>
			</div>
			<div class="mb-3">
			  <label class="form-label">Contraseña</label>
			  <input type="password" name="inputClave" class="form-control" placeholder="Ingrese su contraseña" required>
			</div>
			<div class="mb-3">
			  <label class="form-label">Confirme contraseña</label>
			  <input type="password" name="inputClave2" class="form-control" placeholder="Ingrese su contraseña" required>
			</div>
			<div class="d-flex justify-content-center mt-5">
				<button type="submit" name="botonRegistrar" class="btn btn-lg btn-primary">Crear cuenta</button>
			</div>
		</form>
		<a class="link-danger" href="micuenta.php">Ya tengo cuenta</a>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html> -->