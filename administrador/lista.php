<?php
    include("../conexion.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laboratorios</title>
   <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script src="js/jquery.min.js"></script>
<link href="css/estilos.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default',           
                        width: 'auto', 
                        fit: true  
                    });
                });
               </script>    
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


<div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Periodo</th>
                <th>Horarios</th>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from horarios";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['periodo_hora']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['Id_hora']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>
                
          <?php  } ?>
            
        </table>
 </div>
    </body>
</html>
