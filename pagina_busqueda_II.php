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

 $consulta = "select * from productos where nombreartículo = '$busqueda'";
 
 echo "$consulta <br><b>";
 
 $resultados = mysqli_query($conexion, $consulta);


 while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
  
  
  echo "<tr>
    <td><br>";
     
     foreach ($fila as $i){
      echo $i . "  " . "  " . "  ";
     }
  echo " </td>
     </tr>
     <br>";
  
 }
 
 echo "</table>"; // cierre de tabla
 
 mysqli_close($conexion);
 
 ?>
</body>
</html>