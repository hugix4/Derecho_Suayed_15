<?php
//inicio la sesión
session_start();
//comprueba que el usuario sea válido
if($_SESSION["a1"]!="1"){
	//si no existe, se dirige a la página de inicio 
	echo"<a href='ecxDsua.html'><u>Inicio</u></a>";	
	//salimos del script
	exit();
}
?>