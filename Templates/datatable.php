<?php 
require_once('Model/conexion.php');
// $objeto = new Conexion();
// $conexion =$objeto ->Conectar();

// $consulta ="SELECT * FROM videos";
// $resultado = $conexion->prepare($consulta);
// $resultado->fetchAll(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Datatable
	</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<style background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);>
		table.dataTable thead{
			background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple);
			color:white;
		}
	</style>
</head>
<body>
	<h1 class="text-center" >Datatables</h1>
	<h3 class="text-center">Consumiendo datos desde MySQL-PHP-WHILE</h3>
	<div class="container ">
		<div class="row">	
			<div class="col-lg-12">
				<table align="right" id="tablaArticulos" class=" table-striped table-bordered" style="width:100%; background:linear-gradient(dónde empieza, color1, 40%, color2, 60%);" >
					<thead class="text-center">
						<th>idArt</th>
						<th>descripcionArt</th>
						<th>precioArt</th>
						<th>proveedArt</th>
						<th>clientArt</th>
						<th>fechaSubida</th>
						<th>rutaArt</th>
						<!-- <th></th> -->
					</thead>
				<!-- <tbody > -->
						<?php 
						$sql ="SELECT * FROM videos";
						$result=mysqli_query($conexion,$sql);
						While($mostrar=mysqli_fetch_array($result)){
							// foreach ($videos as $video) {
						
						?>
						<tr>
							<td ><?php echo $mostrar['idArt'] ?></td>
							<td ><?php echo $mostrar['descripcionArt']?></td>
							<td ><?php echo $mostrar['precioArt']?></td>
							<td ><?php echo $mostrar['proveedArt']?></td>
							<td ><?php echo $mostrar['clientArt']?></td>
							<td ><?php echo $mostrar['fechaSubida']?></td>
							<td ><?php echo $mostrar['rutaArt']?></td>
						</tr>
						<?php 
							}
						 ?>
					<!-- </tbody> -->
					
				</table>
			</div>
			
		</div>
		
	</div>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.js">
	</script>
<script>
	$(document).ready(function(){
		$('#tablaArticulos').DataTable();
	});
</script>

</body>
</html>