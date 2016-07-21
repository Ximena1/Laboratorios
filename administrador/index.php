<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>INICIO</title>
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
					<li><a href="../logeo.php">Salir del Sistema</a></li>
					<li><a href="horarios.php">Horarios</a></li>
		  		
	
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
		<h1 class="titulo-blog">CENTRO DE LABORATORIOS DE SISTEMAS</h1>
		<p>UNIVERSIDAD TÉCNICA DE COTOPAXI</p>
	</div>
</section>


<section class="main container">
	<div class="row">
		<section class="posts col-md-9">
			<div class="miga-de-pan">
				<ol class="breadcrumb">
					<li><a href="#">Inicio</a></li>
					<li class="active">Sitio Web</li>
				</ol>
			</div>
			<article class="post clearfix">
				<a href="#" class="thumb pull-left">
					<img src="../img/utcnoche.jpg">
				</a>
				<h2 class="post-title">
					<a href="#">Universidad Técnica de Cotopaxi</a>
				</h2>
				<p class="post-contenido  text-justify">
					La Carrera de Ingeniería en Informática y Sistemas Computacionales de la Universidad de La Universidad Técnica de Cotopaxi se encamina a formar ingenieros con una visión integradora del hombre, la sociedad y de su labor profesional, entendida ésta como servicio y generadora de cambios sociales, por medio de la síntesis de los saberes humanísticos, tecnológicos y científicos.

				</p>
				
			</article>
			<nav>
				<div class="center-block">
					<ul class="pagination">
						<li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>
					</ul>
				</div>
			</nav>
		</section>
		<script type="text/javascript">
			function horario(){
				alert("A seleccionado reservar los Laboratorios");
			}
		</script>
		<aside class="col-md-3 hidden-xs hidden-sm ">
		<h4>OPCIÓNES</h4>
		<div class="list-group">
			<a href="#" class="list-group-item active">Eventos CIYA</a>
			<a href="Rhorarios.php" class="list-group-item" onclick="horario();">Reservar Horarios</a>
			<a href="historial.php" class="list-group-item">Historial</a>

		</div>
</aside>

	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<p> SISTEMAS DE RESERVACIONES DE LABORATORIOS DE LA CARRERA DE INGENIERIA EN INFORMATICA Y SISTEMAS COMPUTACIONALES</p>
			</div>
			<div class="col-xs-6"> 
				<ul class="list-inline text-right">
					<a href="#">Inicio</a>
				</ul>
			</div>
		</div>
	</div>
</footer>
</body>
</html>