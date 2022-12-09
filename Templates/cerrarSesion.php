<?php 
if (isset($_SESSION['email'])) {
	session_destroy();
	header('location:contenidoVideos.php');
}else{
	header('location:contenidoVideos.php');
}
?>
