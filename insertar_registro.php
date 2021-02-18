<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$cod=$_GET["c_art"];

$sec=$_GET["seccion"];

$nom=$_GET["n_art"];

$pre=$_GET["precio"];

$fec=$_GET["fecha"];

$imp=$_GET["importado"];

$por=$_GET["p_orig"];

 require("conect_datos.php");
	
	$conexion=mysqli_connect($db_host, $db_user, $db_contrasena);
	if(mysqli_connect_errno()){//Por si hay error en el host
		
		echo "Fallo al conectar a la BBDD";
		
		exit();
		
	}
	
	mysqli_select_db($conexion, $db_nombre) or die(
	"No se encuentra la base de datos");//Por si no reconoce la base de datos
	
	mysqli_set_charset($conexion, "utf8");//Por si no reconoce los acentos 

	$consulta = "INSERT INTO `productos`(`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBREARTÍCULO`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`, `FOTO`) VALUES ('$cod','$sec','$nom','$pre','$fec','$imp','$por',NULL)";
	
	$resultados=mysqli_query($conexion, $consulta);
	
	if($resultados==false){
		
		echo "Error en la consulta.";
		
		
	}else{
		
		echo "Registro guardado<br><br>";
		
		echo "<table><tr><td>$sec</td></tr>";
		
		echo "<tr><td>$nom</td></tr>";
		
		echo "<tr><td>$pre</td></tr>";
		
		echo "<tr><td>$fec</td></tr>";
		
		echo "<tr><td>$imp</td></tr>";
		
		echo "<tr><td>$por</td></tr>";
		
		echo "<tr><td>NULL</td></tr></table>";
		
	}
	
	
	mysqli_close($conexion);
 
?>
</body>
</html>