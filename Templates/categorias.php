<h1 class="mt-5 d-flex justify-content-center">INCUYO STUDIO</h1>
<div class="container-fluid" style="background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple); height: 150vh; width: 140vh; scroll-margin-top: 10vh;">
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Videos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo
	ASSETS.'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo
	ASSETS.'css/misEstilos.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo
	ASSETS.'css/estilosNav.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo
	ASSETS.'css/estilosVideos.css'; ?>">
</head>
<body style="height: 100vh;">
<?php include_once("Templates/barraNavegacion.php"); ?>
<div class="container-fluid noMarginNoPadding" style="height: 90vh;">
	<div class="row noMarginNoPadding">
		<div class="col-2 noMarginNoPadding" id="navIndexVertical">
			<?php include_once("Templates/barraVerticalStudio.php") ?>
		</div>
		<div class="col-10 noMarginNoPadding" id="bodyIndex" style="height:90vh;">
			<h1>INCUYO Studio</h1>
			<?php 
			if(isset($parametros["contenido"])){
				require_once($parametros["contenido"].".php");
			}

			?>
			
		</div>
	</div>
	
</div>

<script type="text/javascript" src="<?php echo ASSETS.'js/bootstrap.min.js'; ?>"></script>
</body>
</html>