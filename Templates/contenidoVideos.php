<div class="container-fluid" style="background:linear-gradient(30deg, crimson,sienna, royalblue, indianred, purple); height: 150vh; width: 140vh; scroll-margin-top: 10vh;">
	
	<?php 
		//include_once('barraVertical.php');
	?>
	<div class="container-fluid">
		<div class="row">

			<div class="col-3" style="background-color:blue;height: 45vh;padding: 2%;"><img src="Assets/images/YERBA-NOBLEZA-GAUCHA-SELECCI-N-X-500-Gr-1-11746.webp" class="img-fluid"></div>
			
			<div class="col-3" style="background-color:blueviolet; height: 45vh;padding: 2%;"><img src="Assets/images/Cerveza-Heineken-Lata-473-Ml-1-12868.webp" class="img-fluid"></div>
			<div class="col-3" style="background-color:green; height: 45vh;padding: 2%;"><img src="Assets/images/OBLEAS-TYM-D-LECHE-50GR-1-21356.webp" class="img-fluid"></div>
			<div class="col-3" style="background-color:yellow; height: 45vh;padding: 2%;"><img src="Assets/images/videoEjemplo.jpg" class="img-fluid"></div>	

			<div class="col-3" style="background-color:blue; height: 45vh;padding: 2%;"><img src="Assets/images/Gaseosa-Coca-Cola-Sin-Az-car-2-5-Lt-1-2829.webp" class="img-fluid"></div>
			<div class="col-3" style="background-color:blueviolet; height: 45vh;padding: 2%;"><img src="Assets/images/Gaseosa-Sprite-Lima-Lim-n-2-25-Lt-1-58.webp" class="img-fluid"></div>
			<div class="col-3" style="background-color:green; height: 45vh;padding: 2%;"><img src="Assets/images/videoEjemplo.jpg" class="img-fluid"></div>
			<div class="col-3" style="background-color:yellow; height: 45vh;padding: 2%;"><img src="Assets/images/SHAMPOO-PANTENE-PRO-V-ESSENTIALS-HIDRATACION-EXTREMA-X-750-Ml-1-27999.webp" class="img-fluid"></div>	
			<?php require_once("navbar.php");
			if (isset($_SESSION['email'])) {
				echo'
				<div class="container col-5 mt-5">
					<img src="Assets/images/macro.png" class="img-fluid">
				</div>';
			}

			?>
		</div>
		
	</div>

</div>
<script type="text/javascript" src="<?php echo ASSETS.'js/bootstrap.min.js'; ?>"></script>