<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>HORARIOS</title>
	<link rel="shortcut icon" type="image/png" href="../img/logo.png">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<style type="text/css">
		#unos{
			background: red;
			color: #fff;
			font-size: 35px;
			font-family: cambria;
			padding: 5px;

		}
		#unossq{
			background: #aaf;
			color: #fff;
			font-size: 20px;
			font-family: cambria;
			padding: 1px;

		}
		#aca{
			background: blue;
			color: #000;
			font-size: 25px;
			font-family: cambria;
			padding: 5px;
		}
	</style>
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
					<li><a href="horarios.php">Horarios</a></li>
		  			<li><a href="###">Cursos</a></li>
	
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

<center>
<div id="unos">
	UNIVERSIDAD TÉCNICA DE COTOPAXI
	<h4>** Horios de los Laboaratorios **</h4>
</div>


<div id="unossq">
	<h3>Suba los horarios acorde el ciclo académico</h3>
</div>


</center>
<center>

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $periodo= $_POST['periodo'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO horarios(periodo_hora,tamanio,tipo,nombre_archivo) VALUES('$periodo','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "El horario ya esta registrado en el sistema";
            }
        } else {
            echo "El horario no se registro correctamente";
        }
    }
}
?>


<form method="post" action="" enctype="multipart/form-data">
	
<div id="aca">Periodo:
	<select name="periodo">
		<option></option>
		<option>Abril 2015 - Agosto 2015</option>
		<option>Septiembre 2015 - Febrero 2016</option>
		<option>Abril 2016 - Agosto 2016</option>

	</select>
</div>
<br><br><br>
<div class="col-md-offset-3 col-md-9">
<input type="file" name="archivo" class="btn btn-primary" required/>
<br>
<input type="submit" value="subir" name="subir" class="btn btn-primary" > 
<a href="lista.php">Horarios</a>
</div>

</form>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

</center>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<p>Horarios de Laboratorios</p>
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