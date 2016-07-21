<?php
	include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>INICIAR LOGEO</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
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
<br><br>
<center>
<form method="post" action="procesar_logeo.php">
		<div class="form-input">
			<input type="email" name="usuario" placeholder="Ingrese su correo" required/>
		</div>	
		<br>
		<div class="form-input">
			<input type="password" name="contrasena" placeholder="Ingrese su contraseña" required/>
		</div>	
		<br>
		<input type="submit" name="btn1" value="INGRESAR" class="btn btn-primary">	
		<br>
		
	</form>
</center>
<br>
<center>
	<img src="img/sss.png" width="200px" height="200px">
	<img src="img/CONFIGURAR.png" width="200px" height="200px">
</center>
</body>
</html>