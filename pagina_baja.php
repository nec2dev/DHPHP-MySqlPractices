<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

$usuario=$_GET["usu"];
$contra=$_GET["con"];  
 
 require 'conect_datos.php';
 
 $conexion = mysqli_connect($db_host, $db_user, $db_contrasena, $db_nombre); // conexion a base de dato.
 

 if(mysqli_connect_errno($conexion)){
  echo "Fallo al conectar con la BBDD";
  exit();
 }
 
 mysqli_select_db($conexion, $db_nombre) or die ("No se encuantra la bae de datos");
 
 mysqli_set_charset($conexion, "utf8");

 $consulta = "DELETE FROM USUARIOS WHERE USUARIO = '$usuario' AND CONTRA='$contra'";
 
 echo "$consulta <br><br>";
 
 if (mysqli_query($conexion, $consulta)){
	 
	 echo "Baja pocesada";
  
 }
 
 
 mysqli_close($conexion);
 
 ?>
</body>
</html>