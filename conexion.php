<?php 
$conex=mysql_connect("localhost","root","")or die("No se conecto con el servidor");
		mysql_select_db("laboratorios",$conex)or die("No se conecto con la BDD");
?>