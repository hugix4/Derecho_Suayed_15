<?php
header("Content-Type: text/html;charset=utf-8");
require_once('conexionh.php');
$conexion=new conexion();
$conexion->conectar();

	echo"<style type='text/css'>
		a:hover{color:#cb9d01;}
	  p {
		font-family:Century Gothic, sans-serif;
		font-size:11%;
		color: #fff;
		}

		p4{
		font-family:Century Gothic, sans-serif;
		font-size:12%;
		color: #fff;
		}

		
		.headers{
		font-size:9px;
		color: #000066;
		}
		
		.tablin{
		font-size:9px;
		color: #fff;
		}
		
		div.tabla_centro{
		text-align: center;
		}

		div.tabla_centro table {
		margin: 0 auto;
		text-align: center;
		}			
		
	</style>";

	$nE = $_POST[m];
	
	if($nE==1){		
		echo"se recibió la variable m=1";	
	}//Fin del if $q
	
	

$conexion->desconectar();
?>