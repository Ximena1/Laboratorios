<?php
	include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Laboratorios de la UTC</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Jquery carousel slider" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 , minimum-scale=1.0">
	<link href="css/main.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/logo.png">
</head>
<body background="img/fondo.jpg">

<div id="uno">
	UNIVERSIDAD TÉCNICA DE COTOPAXI
</div>


<div id="dos">
	La mana - Pangua - Salache
</div>
<br>
<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/principal.jpg" alt="PRINCIPAL" title="PRINCIPAL" id="wows1_0"/></li>
		<li><img src="data1/images/salache.jpg" alt="SALACHE" title="SALACHE" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/utc.png" alt="jquery carousel" title="UTC" id="wows1_2"/></a></li>
		<li><img src="data1/images/utcnoche.jpg" alt="UTCNOCHE" title="UTCNOCHE" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="PRINCIPAL"><span><img src="data1/tooltips/principal.jpg" alt="PRINCIPAL"/>1</span></a>
		<a href="#" title="SALACHE"><span><img src="data1/tooltips/salache.jpg" alt="SALACHE"/>2</span></a>
		<a href="#" title="UTC"><span><img src="data1/tooltips/utc.png" alt="UTC"/>3</span></a>
		<a href="#" title="UTCNOCHE"><span><img src="data1/tooltips/utcnoche.jpg" alt="UTCNOCHE"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery carousel slider</a> by WOWSlider.com v8.2</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<br>
	<script type="text/javascript">
	function ingreso(){
		alert("Ingresando al sistema de Laboratorios");
	}
	</script>
	<center>
	<a href="Logeo.php"><input type="button" value="INGRESAR" class="btn btn-warning" onclick="ingreso();"></a>
	</center>
	<br><br>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<p>Software de Laboratorios</p>
			</div>
			<div class="col-xs-6"> 
				<ul class="list-inline text-right">
					<a href="#">www.utc.edu.ec</a>
				</ul>
			</div>
		</div>
	</div>
</footer>
</body>
</html>