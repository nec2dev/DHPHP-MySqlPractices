<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$pais = $_GET["buscar"];
	
	require ("conect_datos.php");

$conexion = mysqli_connect($db_host, $db_user, $db_contrasena );

	if(mysqli_connect_errno()){
		
		echo "Error al conectar la base de datos.";
		
		exit();
		
	}
	
	mysqli_select_db($conexion, $db_nombre) or die(
	"No se encuentra la base de datos"); 
	
	mysqli_set_charset($conexion, "utf8");
	
	$sql="SELECT CÓDIGOARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN= ?";
	
	$resultado=mysqli_prepare($conexion, $sql);
	
	$ok=mysqli_stmt_bind_param($resultado, "s", $pais);
	
	$ok=mysqli_stmt_execute($resultado);
	
	if($ok==false){

	echo "Error al eecutar la consulta";
	
	}else{
		
		$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);
		echo "Artículos encontrados: <br><br>";
		
		while(mysqli_stmt_fetch($resultado)){
			
			echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
	}
	
	mysqli_stmt_close($resultado);
	}
?>
</body>
</html>