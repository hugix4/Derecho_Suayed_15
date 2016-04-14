<?php
//ini_set('session.gc_maxlifetime',5400);//90 minutos
//inicio la sesión
session_start();
//comprueba que el usuario sea válido
if($_SESSION["a1"]!="1"){
	//si no existe, se dirige a la página de inicio 
	header("Location:Exam2015.html");
	//salimos del script
	exit();
}
?>