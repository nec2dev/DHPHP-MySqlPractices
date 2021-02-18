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
	
	$conexion=mysqli_connect($db_host, $db_user, $db_contrasena);
	if(mysqli_connect_errno()){//Por si hay error en el host
		
		echo "Fallo al conectar a la BBDD";
		
		exit();
		
	}
	
	mysqli_select_db($conexion, $db_nombre) or die(
	"No se encuentra la base de datos");//Por si no reconoce la base de datos
	
	mysqli_set_charset($conexion, "utf8");//Por si no reconoce los acentos 

	$consulta="select * from datospersonales";
	
	$resultados=mysqli_query($conexion, $consulta);
	
	/*while(($fila=mysqli_fetch_row($resultados))==true){*/
	//podemos sacar el true
	
	while($fila=mysqli_fetch_row($resultados)){
	
	echo $fila[0] . "   ";
	
	echo $fila[1] . "   ";
	
	echo $fila[2] . "   ";
	
	echo $fila[3] . "   ";
	
	echo "<br>";
	
	}
	
	mysqli_close($conexion);
	
	/*$fila=mysqli_fetch_row($resultados);
	
	echo $fila[0] . " ";
	
	echo $fila[1] . " ";
	
	echo $fila[2] . " ";
	
	echo $fila[3] . " ";
	
	echo "<br>";
	
	$fila=mysqli_fetch_row($resultados);
	
	echo $fila[0] . " ";
	
	echo $fila[1] . " ";
	
	echo $fila[2] . " ";
	
	echo $fila[3] . " ";
	
	echo "<br>";
	
	$fila=mysqli_fetch_row($resultados);
	
	echo $fila[0] . " ";
	
	echo $fila[1] . " ";
	
	echo $fila[2] . " ";
	
	echo $fila[3] . " ";
	
	echo "<br>";*/
	
?>
</body>
</html>