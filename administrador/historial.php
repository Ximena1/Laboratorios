<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Historial</title>
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
			<script type="text/javascript">
				function ingresando(){
					alert("Ingresando a la lista completa de los laboratorios");
				}
			</script>
			<div class="collapse navbar-collapse" id="navegation-fm">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="index.php">Regresar</a></li>
					<li><a href="listala.php" onclick="ingresando();">Lista de Los laboratorios</a></li>
					
		  		
	
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
<center>
<form method="post">
	<?php 
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";

if (isset($_POST["btn1"])) {
  $btn=$_POST["btn1"];
  $bus=$_POST["cedula"];
if ($btn=="Buscar") {  
 
 $sql="select * from laboratorio where numero_lab='$bus'";

$cs=mysql_query($sql,$conex);
while ($fila=mysql_fetch_array($cs)) {
  $var1= $fila[1];
  $var2= $fila[2];
  $var3= $fila[3];
  $var4 = $fila[4];
  $var5 = $fila[5];
  $var6 = $fila[6];
  $var7 = $fila[7];
  $var8 = $fila[8];

}
  }

}

?>
    
    <div  style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		                    <div class="panel panel-info" style="background: rgba(255, 255, 255, .9);">
		                        <div class="panel-heading">
		                            <div class="panel-title"><b><center>RESERVACIÓN DE LABORATORIOS</center></b>   
		                        
		                         </div>
		                        </div>  
		                        <div class="panel-body" >
		                                
		                                  <br>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                	 <label for="email" class="col-md-3 control-label">Laboratorio:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="email" maxlength="10" class="form-control" data-minlength="10" onkeypress="ValidaSoloNumeros();" name="cedula" placeholder="Ingrese numero de Laboratorio" value="<?php echo $var1 ?>" value="" required/><br>
		                                        <p class="error" style="color: red; font-weight: bold;">
												</p>
												
		                                    </div>
		                                </div>
		                                <br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Dia:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var2 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Fecha:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var3 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>


		                                <br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Ingreso:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var4 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Salida:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="direccion" value="<?php echo $var5 ?>" readonly>
		                                   		<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Docente:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" maxlength="10" class="form-control" name="telefono" data-minlength="10" onkeypress="ValidaSoloNumeros();"  value="<?php echo $var6 ?>" readonly>
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Curso:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" onkeypress="ValidaSoloLetras();" class="form-control" name="genero" value="<?php echo $var7 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Asignatura:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="email" value="<?php echo $var8 ?>"readonly>
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  		                       				
		                       			<div class="col-md-offset-3 col-md-9">
		                                        <button id="btn-signup" type="submit" class="btn btn-primary" name="btn1" value="Buscar"><b>Verificar Reservaciones</b></button>	
		                                
		                               </div>
		                         </div>
		                    </div>
		
		               
		               
		                
		         </div> 
</form>
</center>
</body>
</html>