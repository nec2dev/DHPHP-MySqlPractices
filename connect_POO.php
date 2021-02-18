<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$conexion=new mysqli("localhost", "root", "BrizuelaMySQL1999", "pruebas");

	if($conexion->connect_errno){
		
		echo "Falló la conexión a la base de datos" . $conexion->connect_errno;
		
	}
	//mysqli_set_charset($conexion, "utf8");Modo procedimental
	$conexion->set_charset("utf8");//modo POO
	
	$sql= "SELECT * FROM PRODUCTOS";
	
	//$resultados=mysqli_query($conexion, $sql);Modo procedimental
	$resultados=$conexion->query($sql);//modo POO
	
	if($conexion->errno){
		
		die($conexion->error);
		
	}
	
	//while($ila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
	//Modo procedimental
	//while($fila=$resultados->fetch_assoc()){//modo POO
		
	/*	echo "<table><tr><td>";
	
	echo $fila['códigoartículo'] . "</td><td>";
	
	echo $fila['nombreartículo'] . "</td><td>";
	
	echo $fila['sección'] . "</td><td>";
	
	echo $fila['importado'] . "</td><td>";
	
	echo $fila['precio'] . "</td><td>";
	
	echo $fila['paísdeorigen'] . "</td><td></tr></table> ";
	
	echo "<br>";
	
	}*/
	
	/*echo "<br>";
	echo "<tr>
    <td>";
     
     foreach ($fila as $i){
      echo $i;
     }
  echo " </td>
     </tr>
     <br>";
	}*/
	 
	 
	while($fila=$resultados->fetch_array()){//modo POO
	 
	echo "<table><tr><td>";
	
	echo $fila[0] . "</td><td>";
	
	echo $fila[1] . "</td><td>";
	
	echo $fila[2] . "</td><td>";
	
	echo $fila[3] . "</td><td>";
	
	echo $fila[4] . "</td><td>";
	
	echo $fila[5] . "</td><td></tr></table> ";
  
 }
	
	//mysqli_close($conexion); Modo procedimental
	$conexion->close();//modo POO

?>
</body>
</html>