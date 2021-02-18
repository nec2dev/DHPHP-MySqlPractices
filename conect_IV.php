<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>

table{	width:50%;
		border:1px dotted #39C;
		margin:auto;
}

</style>

<body>
<?php

	require("conect_datos.php");
	
	$conexion=mysqli_connect($db_host, $db_user, $db_contrasena);
	if(mysqli_connect_errno()){//Por si hay error en el host
		
		echo "Fallo al conectar a la BBDD";
		
		exit();
		
	}
	
	mysqli_select_db($conexion, $db_nombre) or die(
	"No se encuentra la base de datos");//Por si no reconoce la base de datos
	
	mysqli_set_charset($conexion, "utf8");//Por si no reconoce los acentos 

	$consulta="select * from productos where paísdeorigen='españa'";
	
	$resultados=mysqli_query($conexion, $consulta);
	
	/*while(($fila=mysqli_fetch_row($resultados))==true){*/
	//podemos sacar el true
	
	while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
		
		echo "<table><tr><td>";
	
	echo $fila['códigoartículo'] . "</td><td>";
	
	echo $fila['nombreartículo'] . "</td><td>";
	
	echo $fila['sección'] . "</td><td>";
	
	echo $fila['importado'] . "</td><td>";
	
	echo $fila['precio'] . "</td><td>";
	
	echo $fila['paísdeorigen'] . "</td><td></tr></table> ";
	
	echo "<br>";
	
	echo "<br>";
	
	}
	
	mysqli_close($conexion);
	
	
?>
</body>
</html>