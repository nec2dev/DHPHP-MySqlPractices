<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$db_host="localhost";
	$db_nombre="pruebas";
	$db_user="root";
	$db_contrasena="BrizuelaMySQL1999";
	
	$conexion=mysqli_connect($db_host, $db_user, $db_contrasena, $db_nombre);

	$consulta="select * from datospersonales";
	
	$resultados=mysqli_query($conexion, $consulta);
	
	$fila=mysqli_fetch_row($resultados);
	
	echo $fila[0] . "<br>";
	
	echo $fila[1] . "<br>";
	
	echo $fila[2] . "<br>";
	
	echo $fila[3] . "<br>";
	
?>
</body>
</html>