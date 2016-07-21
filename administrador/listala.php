<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Reserva de Laboratorios</title>
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
		<h1 class="titulo-blog">CENTRO DE LABORATORIOS DE SISTEMAS</h1>
		<p>UNIVERSIDAD TÉCNICA DE COTOPAXI</p>
	</div>
</section>

<br>
<div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Laboratorio</th>
                <th>Dia</th>
                <th>Fecha</th>
                <th>Hora de Ingreso</th>
                <th>Hora de Salida</th>
                <th>Docente Encargado</th>
                <th>Curso</th>
                <th>Asignatura</th>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from laboratorio";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['numero_lab']; ?></td>
                <td><?php echo $datos['dia_lab']; ?></td>
                <td><?php echo $datos['fecha_lab']; ?></td>
                <td><?php echo $datos['hora_ingreso_lab']; ?></td>
                <td><?php echo $datos['hora_salida_lab']; ?></td>
                <td><?php echo $datos['docente_lab']; ?></td>
                <td><?php echo $datos['Curso_lab']; ?></td>
                <td><?php echo $datos['asignatura_lab']; ?></td>
                </tr>
                
          <?php  } ?>
            
        </table>
 </div>
</body>
</html>