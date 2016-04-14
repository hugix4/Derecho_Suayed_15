<?php
//ini_set('session.gc_maxlifetime',5400);//90 minutos
include('secure_Dsua.php');
session_start();
require_once('cnxh.php');
$conexion=new conexion();
$conexion->conectar();
$Npreguntas=115;
?>
<html>
	<head>
	<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	 <script>
	  $(document).ready(function(){
		
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
				})

			})
			
	 </script>
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	</head>	
	<body>
	
		<style>
			.container{
				width: 100%;
				margin: 0 auto;
			}
			ul.tabs{
				margin: 0px;
				padding: 0px;
				list-style: none;
			}
			ul.tabs li{
				background: #dbae18;
				color: #000;
				display: inline-block;
				padding: 10px 15px;
				cursor: pointer;
			}

			ul.tabs li.current{
				background: #3078ef;
				color: #fff;
			}

			.tab-content{
				display: none;
				background: #3078ef;
				padding: 15px;
			}

			.tab-content.current{
				display: inherit;
			}
		</style> 
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Examen de Colocación 2015</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		<br/>
		<div class="container">

		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1"><b>Resultados</b></li>
			
		</ul>
	<div id="tab-1" class="tab-content current">				
	<!--Función de php para mostrar la pregunta y registro correspondiente sin tanto rollo-->
	<?php
		
		function rCorrecta($respuestas,$correctas,$Npreguntas){		
			$rCor=array();
			for($i=1;$i<=$Npreguntas;$i++){
				if($respuestas[$i]==$correctas[$i]){
					$rCor[$i]=1;			
					//echo "La respuesta correcta es: $ansArr[$h]";
				}
				else{
					$rCor[$i]=0;			
				}		
			}
			return $rCor;			
		}
	
	
	
		function getRespuestas($Npreguntas){
			$res=array();
			for($i=0;$i<=$Npreguntas;$i++){				
				$res[$i]=$_POST['p'.$i];
			}
			return $res;
		}
		
		function getCorrectas($h)
		{
			$contador=$h;
			$Correctas=array();
			while ($h>0)
			{				
				$numP=$h-$contador+1;
				$Correcta=$_POST['R'.$numP];
				$Correctas[($numP)]=$Correcta;
				$contador--;
				if($contador==0)
				{								
					return $Correctas;
					$h=0;
				}
			}		
		}
		
		function cadenaBin($Npreguntas,$rBinarias){//Obtiene las respuestas como cadena binaria
			$cadBin='';
			for($i=1;$i<=$Npreguntas;$i++){
				$cadBin.=$rBinarias[$i];
			}
			return $cadBin;
		}
		
		function calificacion($Npreguntas,$arregloContesto)
		{
			$suma=0;//Se inicializa el valor de la suma
			for($i=0;$i<=$Npreguntas;$i++){			//Genera los valores que se sumarán
			$suma+=$arregloContesto[$i];
			}	
			$cal=($suma*100)/$Npreguntas; //Multiplica la calificación por 10 y la divide entre el número de preguntas para obtener un valor entre 0 y 10
			$cal=round($cal,2);//Redondea a dos dígitos los decimales de la calificación numérica final
			return $cal;
		}			
		
		function niveles($i,$n,$valor,$fin,$respuestas2){
			$suma=0;
			$nivel='';
			for($h=$i;$h<=$n;$h++){
				$suma+=$respuestas2[$h];				
			}
			if($suma<$valor-1){
					$nivel=$fin;
				}			
			return $nivel;
		}
		
		function colocacion($respuestas2){
			$nivel='';
			$nivel1=niveles(1,16,9,"A1-",$respuestas2);
			if($nivel1==''){
				$nivel2=niveles(17,32,9,"A1",$respuestas2);
				if($nivel2==''){
					$nivel3=niveles(33,64,17,"A1+",$respuestas2);
					if($nivel3==''){
						$nivel4=niveles(65,91,15,"B1-",$respuestas2);
						if($nivel4==''){
							$nivel5=niveles(92,100,5,"B1",$respuestas2);
							if($nivel5==''){
								$nivel6=niveles(101,106,4,"B1+",$respuestas2);
								if($nivel6==''){
									$nivel7=niveles(107,115,5,"B2-",$respuestas2);
									if($nivel7==''){
										$nivel='B1+/B2-';
									}else $nivel=$nivel7;
								}else $nivel=$nivel6;
							}else $nivel=$nivel5;
						}else $nivel=$nivel4;
					}else $nivel=$nivel3;
				}else $nivel=$nivel2;
			}else $nivel=$nivel1;
			return $nivel;
		}
		
		
		
		echo "
		<style type='text/css'>
					
			div.tabla_centro{
			text-align: center;
			}

			div.tabla_centro table {
			margin: 0 auto;
			text-align: center;
			}			
		</style>";					
		echo "<div class='tabla_centro'><br/>";				
		$respuestas=getRespuestas($Npreguntas);//Aqui se obtienen las respuestas tal cual en un arreglo que empieza en 1 no en 0 y termina en 115 en vez de 1114
		//echo"<br/>A continuación respuestas<br/>";
		//print_r($respuestas);
		
		$correctas=getCorrectas($Npreguntas);	//Aqui se obtiene el arreglo de las respuestas correctas, empezando en 1 no 0 y termina en 115 no 114
		//echo"<br/>A continuación correctas<br/>";
		//print_r($correctas);
		$rBinarias=rCorrecta($respuestas,$correctas,$Npreguntas);//Aqui se obtiene el arreglo binario '1010101' que da la suma para la calificacion final
		//echo "<br/>El resultado de la función fue:";
		//echo $rBinarias;
		//print_r($rBinarias);
		//echo"<br/>";		
		$respuestas2='';
		$rArreglo='';
		for($i=1;$i<=$Npreguntas;$i++){
		$respuestas2.='@'.$respuestas[$i];		
		}
		for($i=1;$i<=$Npreguntas;$i++){
		$rArreglo.=$rArreglo[$i];		
		}
		//print_r($respuestas2);//Aquí obtengo la cadena del arreglo anterior, respuestas tal cual
		//echo"<br/>A continuación respuestas2<br/>";
		//print_r($respuestas2);
		$calfin=calificacion($Npreguntas,$rBinarias);	//Entra a la función que calcula la calificación numérica final
		$cadBin=cadenaBin($Npreguntas,$rBinarias);  //Esta función genera el arreglo binario como cadena de texto
		//echo "El resultado en cadena binaria es: $cadBin";
		$colfin=colocacion($rBinarias);
		
		//echo "<br/><br/><b>El resultado de tu evaluación es: <br/><br/>$calfin</b>";				
		//echo "<br/><br/><b>Tu nivel es: <br/><br/>$colfin</b><br/><br/>";
		$folio=$_POST[folio];
		$nombre=$_POST[nombre];
		//echo "El folio obtenido es: $folio y el nombre obtenido es: $nombre<br/><br/>";
		
		
		/*if($_POST[Grado]=='1c'){
			$calPond=calificacionPonderada1($datos);
		}
		else if($_POST[Grado]=='3c'){
			$calPond=calificacionPonderada3($datos);
		}*/
		//echo "<br/><br/><b>El resultado de tu evaluación es: $calPond</b><br/><br/>";		
		$Cuenta=$_POST[Cuenta];
		if($Cuenta==4444){
			echo "Esta es la cuenta de prueba";
			echo "Calfin = $calfin<br/><br/>";
			echo "Binarias = $cadBin<br/><br/>";
			echo "Respuestas= $respuestas2<br/><br/>";
			//echo"Este registro no entrará a la BD<br/><br/>";
			$sql="Update bdSUA Set Binarias='$cadBin', Respuestas='$respuestas2', Calificacion='$calfin', Resultado='$colfin' where Cuenta='$_POST[Cuenta]';";
			$sql=$conexion->consulta($sql);
			echo"Update bdSUA Set Binarias='$cadBin', Respuestas='$respuestas2', Calificacion='$calfin', Resultado='$colfin', Termino='S' where Cuenta='$_POST[Cuenta]';";
		}
		else{			
				//echo"Update baseOdontologia15 Set Binarias='$cadBin', Respuestas='$respuestas2', Calificacion='$calfin', Resultado='$colfin', Termino='S' where Cuenta='$_POST[Cuenta]'";
				$sql="Update bdSUA Set Binarias='$cadBin', Respuestas='$respuestas2', Calificacion='$calfin', Resultado='$colfin', Termino='S' where Cuenta='$_POST[Cuenta]';";
				$sql=$conexion->consulta($sql);
				
				if($colfin=='A1-'){
					$colfin1='Introductorio';
				}
				else if($colfin=='A1'){
					$colfin1='Básico';
				}
				else if($colfin=='A1+'){
					$colfin1='PreIntermedio';
				}
				else if($colfin=='B1-'){
					$colfin1='PreIntermedio';
				}
				else if($colfin=='B1'){
					$colfin1='Intermedio';
				}
				else if($colfin=='B1+'){
					$colfin1='IntermedioAlto';
				}
				else if($colfin=='B2'){
					$colfin1='Avanzado';
				}
				echo "Tu resultado fue: $colfin1";
		}
		
		//echo "Respuestas recibidas correctamente, gracias por tu participación. Pronto te haremos saber tus resultados";
		//echo "lo que se envió a mySQL es : Update Xents Set p1='$respuestas2', Calificacion='".$calfin."', Termino='S' where Cuenta='$_POST[Cuenta]'";
		//echo "La calificación que obtuviste en el exámen es de: ".$calfin." y respuestas fue igual a ".$respuestas2;		
		//echo "<br/><button type='button'><a href='salirecInc15.php' style='color:black'>Cerrar Sesión</a></button>";
		echo "<br/>
		<br/>
		<u>
			<a href='salirDsua.php' style='color:black'>
				Cerrar Sesión
			</a>
		</u>";
		
		
		
	?>
		
	</div>	
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2015. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>