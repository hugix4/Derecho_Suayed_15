<?php
//ini_set('session.gc_maxlifetime',5400);//90 minutos
//inicio la sesi�n
session_start();
//comprueba que el usuario sea v�lido
if($_SESSION["a1"]!="1"){
	//si no existe, se dirige a la p�gina de inicio 
	header("Location:Exam2015.html");
	//salimos del script
	exit();
}
?>