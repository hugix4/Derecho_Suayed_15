<?php
include ('fxPreguntas.php');
require('secure_xDsua.php');
require_once('cnxh.php');
$conexion=new conexion();
$conexion->conectar();
$Npreguntas=50;
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
			
		
			$(document).ready(function(){
				$("#boton").click(function (){ 
					for(var i=1;i<11;i++){
						if(!$("#examen input[name='p"+i+"']:radio").is(':checked')){							
							document.getElementById("pg"+i).style.color="#01DF01";
							alert("Falta contestar la pregunta "+i);
							var termino=i;
						return false;
						}
						else if(termino==10){
							$("#examen").submit();
						}
					}
				});
			});
		
		function todas($valor){
			var allElems = document.getElementsByTagName('input');
			for (i = 0; i < allElems.length; i++) {
				if (allElems[i].type == 'radio' && allElems[i].value != $valor) {
					allElems[i].checked = true;
				}
			}
		}
		
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
						</br><b style="color: #000066;">Examen Diagnóstico 2014</b>										
					</ul>
	</div>
	
	
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Preguntas</b></li>
	</ul>
	<div id="tab-1" class="tab-content current">			
	<form align='justify' id="examen" action="rnDsua.php" method="POST" style='width:600px;margin-left:400px;'>
	<font size="3">	
	<!--Función de php para mostrar la pregunta y registro correspondiente sin tanto rollo-->
	
	<?php
	
	function rCorrecta($ansArr,$rBien){
		if($ansArr==$rBien){			
			$rCor=1;			
			//echo "La respuesta correcta es: $ansArr[$h]";
		}
		else{
			$rCor=0;			
		}		
		return $rCor;
		//return $cadOr=[$rCor,$ansArr];
	}
	
	
	function pregunta($num,$Pregunta,$OpA,$OpB,$OpC,$OpD, $rBien,$etapa){		
		$ansArr=array($OpA,$OpB,$OpC,$OpD);
		shuffle($ansArr);
		echo "<br/><br/><br/><b><font color='#08088A'>".$num.". </font><font id='pg".$num."' color='#08088A'>".str_replace("B:","<br/>&nbsp;&nbsp;&nbsp;&nbsp;B:",$Pregunta)."</font></b>
		<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[0]."'><font color='#08088A'>A. </font>".$ansArr[0]."</input>
		<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[1]."'><font color='#08088A'>B. </font>".$ansArr[1]."</input>
		<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[2]."'><font color='#08088A'>C. </font>".$ansArr[2]."</input>
		<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[3]."'><font color='#08088A'>D. </font>".$ansArr[3]."</input>		
		<input type='hidden' name='R".$num."' value='".$rBien."'>
		<input type='hidden' name='Et' value='$etapa'>
		</br></br>";
	}
	
	
	
	$Termino=consultaUnica("select Termino from bdSUAx where Cuenta=$_SESSION[Cuenta]");		
	$Etapa=consultaUnica("select Etapa from bdSUAx where Cuenta=$_SESSION[Cuenta]");
	//echo "El resultado de Termino es: $Termino";
	if($Termino== 'N')
	{//Estos son los if decisivos en virtud del grado en el que se encuentren@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@						
		if($Etapa==0){			
			echo("<h4 style='margin-left:-100;'>READ THE STATEMENTS AND THEN COMPLETE THEM. CHOOSE THE CORRECT ANSWER: a, b, c , d . </h4><br/>");
			for($i=1;$i<=10;$i++)
			{
				$Num=$i;
				$sqlQ = "select Pregunta, A, B, C, D, Respuesta from pFO15 where Numero='$Num'";
				$sqlQ=$conexion->consulta($sqlQ);
				while($rowQ=mysql_fetch_array($sqlQ))
				{
					$Pregunta=$rowQ["Pregunta"];
					$OpA=$rowQ["A"];
					$OpB=$rowQ["B"];
					$OpC=$rowQ["C"];
					$OpD=$rowQ["D"];
					$rBien=$rowQ["Respuesta"];
					
				}
												
				pregunta($i,$Pregunta, $OpA, $OpB, $OpC, $OpD, $rBien,0);
			}		
			echo "<input type='hidden' name='Cuenta' value='$_SESSION[Cuenta]'>";
			echo "<input type='hidden' name='Grado' value='$Grado'>";
			echo "<br/><br/><input type='submit' id='boton' value='Terminar' style='margin-left:150;'>";
			echo "<br/><br/><input type='button' onclick=todas(1) id='boton' value='Responder Bien' style='margin-left:150;'>";
			echo "<br/><br/><input type='button' onclick=todas(0) id='boton' value='Responder Mal' style='margin-left:150;'>";
			echo "</font>";
			echo "</form>";
		
		}
		else{
		echo"<a href='rnDsua.php?Et=$Etapa'><u>Regresa a la etapa en la que te quedaste</u></a>";
		}
	}
	else if($Termino=='S')
	{
		$Cal=consultaUnica("select Calificacion from bdSUAx where Cuenta=$_SESSION[Cuenta]");
		echo "Ya haz hecho el examen<br/>El resultado de tu evaluación es: $Cal";
		echo "<br/><br/><button type='button'style='margin-left:100px;'><a href='salirarq.php' style='color:black'>Cerrar Sesión</a></button>";
	}		
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