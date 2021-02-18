<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

$busqueda=$_GET["buscar"]; 
 
 require 'conect_datos.php';
 
 $conexion = mysqli_connect($db_host, $db_user, $db_contrasena, $db_nombre); // conexion a base de dato.
 

 if(mysqli_connect_errno($conexion)){
  echo "Fallo al conectar con la BBDD";
  exit();
 }
 
 mysqli_set_charset($conexion, "utf8");

 $consulta = "select * from productos where nombreartículo like '%$busqueda%'";
 
 $resultados = mysqli_query($conexion, $consulta);


 while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
	 
	 echo "<form action='actualizar.php' method='get'>";
	 
	 echo "<input type='text' name='c_art' value='" . $fila['CÓDIGOARTÍCULO'] . "'><br>";
	 
	 echo "<input type='text' name='n_art' value='" . $fila['NOMBREARTÍCULO'] . "'><br>";
	 
	 echo "<input type='text' name='seccion' value='" . $fila['SECCIÓN'] . "'><br>";
	 
	 echo "<input type='text' name='importado' value='" . $fila['IMPORTADO'] . "'><br>";
	 
	 echo "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
	 
	 echo "<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
	 
	 echo "<input type='text' name='p_orig' value='" . $fila['PAÍSDEORIGEN'] . "'><br>";
	 
	 echo "<input type='submit' name='enviado' value='Actualizar'>";
	  
  echo " </form>";
  
 }
 
 mysqli_close($conexion);
 
 ?>
</body>
</html>