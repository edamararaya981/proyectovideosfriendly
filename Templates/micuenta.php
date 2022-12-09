
<div class="container-fluid pt-5 cuenta" style="background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);
border-bottom: 65vh solid #efefef; height: 100%;">
	<div class="container col-5 pt-3" style="background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);; border-radius: 10px; height: 70vh; z-index:1">
		<div class="d-flex justify-content-center">
			<h4 class="mb-4 mt-2">Bienvenido a SUPMERCADOS INCUYO</h4>
				
		</div>
		<form method="POST" class="mb-3">
			<div class="mb-3">
				<label class="form-label">Email</label>
				<input type="email" name="inputEmail" class="form-control " aria-describedby="emailHelp" placeholder="Ingresa tu correo" required>
				<div id="emailHelp" class="form-text">No compartas informacion con nadie</div>
<!-- 
				<div class="input-group d-flex">
					<span class=col-3 input-group-text">Usuario</span>
					<input type="text" name="inputUsuarioRegistro"
					class="form-control" placeholder="Ingresa tu usuario" requerid> -->

				
			</div>
			<div class="mb-5">
				<label class="form-label">Contraseña</label>
				<input type="password" name="inputPassword" class="form-control">
<!-- 				<button type="submit" id="botonRegistroSiguiente">Ingresar</button>
 -->		</div>
 			<div class="mt-2 mb-2 d-flex justify-content-center">
				<button type="submit"name="botonIngresar" href="registro.php"	 class="btn btn-lg btn-danger">Ingresar
				</button>

 	 		<div class="mt-4 d-flex justify-content-center">
		<!-- 	<button type="submit" name="botonRegistroSiguiente" class="link-success" href="<?php echo URL.'registro'; ?>" class="btn btn-lg btn-danger">Ingresar</button> -->
				<a class="link-danger" href="<?php echo URL.'registro'; ?>">No tengo cuenta</a> 
<!--  			<div class="d-flex justify-content-center"> -->
				
			</div>
		</form>
		
	</div>

</div>
 <?php 
// require_once("controller.php"); 
// if (isset($_POST['botonLogin'])) {
// 	ingresar();
// }
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página web</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilosNav.css">
</head>
<body>
  	<?php require_once("barraNavegacion.php"); ?>
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
			<div class="d-flex justify-content-center mt-5">
				<button type="submit" name="botonLogin" class="btn btn-lg btn-primary">Ingresar</button>
			</div>
		</form>
		<a class="link-danger" href="registro.php">No tengo cuenta</a>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html> -->



