<?php 

function getView($pagina,$parametros){
	if(file_exists('Templates/'.$pagina.'.php')){
		require_once('Templates/main.php');
		//require_once('Templates/'.$pagina.'.php');	
		
	}else{
		require_once('Templates/error.php');
	}
}
?>