<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Reservar Laboratorio</title>
	<link rel="shortcut icon" type="image/png" href="../img/logo.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body background="../img/fondo.jpg">
<header>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegation-fm">
					<span class="sr-only">Desplegar / Ocultar Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">SISGANT</a>
			</div>
			<!--Inicia Menu-->
			<div class="collapse navbar-collapse" id="navegation-fm">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="index.php">Regresar</a></li>
				
	
<li class="active"><a href="perfil.php">
 <?php 
	session_start(); 
	echo "".$_SESSION['nombreusuario']."";""
?>
</a>
                                </li>
				</ul>
				
			</div>
		</div>
	</nav>
</header>

<section class="jumbotron">
	<div class="container">
		<h1 class="titulo-blog">RESERVA DE LABORATORIOS</h1>
		<p>UNIVERSIDAD TÉCNICA DE COTOPAXI</p>
	</div>
</section>


<form method="post">
<?php
if (isset($_POST["btn1"])) {
  $btn=$_POST["btn1"];
  if ($btn == "Reservar") {
   
    $lab=$_POST["lab"];
    $dia=$_POST["dia"];
    $fecha=$_POST["fecha"];
    $fen=$_POST["fen"];
    $fsa=$_POST["fsa"];
    $nombre=$_POST["nombre"];
    $cur=$_POST["cur"];
    $asig=$_POST["asig"];

$sql="insert into laboratorio(numero_lab,dia_lab,fecha_lab,hora_ingreso_lab,hora_salida_lab,docente_lab,Curso_lab,asignatura_lab) values
 ('$lab','$dia','$fecha','$fen','$fsa','$nombre','$cur','$asig')";

if ($lab==1) {
	echo "<script> alert('Error esta reservado'); </script>";
	
}else{
	$cn= mysql_query($sql,$conex);
	echo "<script> alert('Se reservo correctamente'); </script>";
}


  }
}

?>
	<center>
		<table class="table table-striped table-bordered table-hover">
			<tr>
				<td colspan="20"><center><h2>LABORATORIOS</h2></center></td>
			</tr>
			<tr>
				<td>Seleccione el laboratorio
				<center>
					<select name="lab" class="btn btn-warning">
						<option></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
					</center>
				</td>
			</tr>
			<tr>
				<td>Seleccione el Dia
				<center>
					<select name="dia" class="btn btn-warning">
						<option></option>
						<option>Lunes</option>
						<option>Martes</option>
						<option>Miercoles</option>
						<option>Jueves</option>
						<option>Viernes</option>
						<option>Sabado</option>
					</select>
					</center>
				</td>
			</tr>
			<tr>
				<td>Seleccione la Fecha
				<center>
					<input type="date" name="fecha" class="btn btn-warning">
				</center>
				</td>
			</tr>
			<tr>
				<td>Seleccione la Hora de Entrada
				<center>
					<select name="fen" class="btn btn-warning">
						<option></option>
						<option>07:00</option>
						<option>08:00</option>
						<option>09:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
						<option>14:00</option>
						<option>15:00</option>
						<option>16:00</option>
						<option>17:00</option>
					</select>
					</center>
				</td>
			</tr>
			<tr>
				<td>Seleccione la Hora de Salida
				<center>
					<select name="fsa" class="btn btn-warning">
						<option></option>
						<option>07:00</option>
						<option>08:00</option>
						<option>09:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
						<option>14:00</option>
						<option>15:00</option>
						<option>16:00</option>
						<option>17:00</option>
					</select>
					</center>
				</td>
			</tr>
			<tr>
				<td>Nombre del Docente encargado
					<center>
					<input type="text" name="nombre" class="btn btn-warning" required/>
					</center>
				</td>
			</tr>
			<tr>
				<td>Seleccione el Curso
				<center>
					<select name="cur" class="btn btn-warning">
						<option></option>
						<option>Primero</option>
						<option>Segundo</option>
						<option>Tercero</option>
						<option>Cuarto</option>
						<option>Quinto</option>
						<option>Sexto</option>
						<option>Septimo</option>
						<option>Octavo</option>
						<option>Noveno</option>
					</select>
					</center>
				</td>
			</tr>
			<tr>
				<td>Asignatura 
					<center>
					<input type="text" name="asig" class="btn btn-warning" required/>
					</center>
				</td>
			</tr>
			<tr>
				<td>Reservar
				<center>
					<input type="submit" name="btn1" value="Reservar" class="btn btn-primary">
				</center>
				</td>

			</tr>
		</table>
	</center>
</form>
</body>
</html>