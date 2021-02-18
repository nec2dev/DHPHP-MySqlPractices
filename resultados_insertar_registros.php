<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$c_art = $_GET["c_art"];
	$secc = $_GET["secc"];
	$n_art = $_GET["n_art"];
	$pre = $_GET["pre"];
	$fec = $_GET["fec"];
	$imp = $_GET["imp"];
	$p_ori = $_GET["p_ori"];
	
	require ("conect_datos.php");

$conexion = mysqli_connect($db_host, $db_user, $db_contrasena );

	if(mysqli_connect_errno()){
		
		echo "Error al conectar la base de datos.";
		
		exit();
		
	}
	
	mysqli_select_db($conexion, $db_nombre) or die(
	"No se encuentra la base de datos"); 
	
	mysqli_set_charset($conexion, "utf8");
	
	$sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?)";
	
	$resultado=mysqli_prepare($conexion, $sql);
	
	$ok=mysqli_stmt_bind_param($resultado, "sssssss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_ori);
	
	$ok=mysqli_stmt_execute($resultado);
	
	if($ok==false){

	echo "Error al eecutar la consulta";
	
	}else{
		
		echo "Se ha agregado un nuevo registro";
	
	mysqli_stmt_close($resultado);
	}
?>
</body>
</html>