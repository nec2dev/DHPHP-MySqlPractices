<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

	$consulta = "INSERT INTO `productos`(`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBREARTÍCULO`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`, `FOTO`) VALUES ('AR44','DEPORTES','RAQUETA PADINGTON','200','05-01-2018','VERDADERO','ARGENTINA',NULL)";
	
	$resultados=mysqli_query($conexion, $consulta);
	
	mysqli_close($conexion);
 
?>



</body>
</html>