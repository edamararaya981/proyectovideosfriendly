<?php 
require_once("templates/consultas.php"); 
if (isset($_POST['botonRegistrar'])) {
	registrar();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página web</title>
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/estilos.css">
<body>
	<?php require_once("templates/navbar.php"); ?>
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
		<a class="link-danger" href="micuenta2.php">Ya tengo cuenta</a>
	</div>
	<script type="text/javascript" src="Assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>