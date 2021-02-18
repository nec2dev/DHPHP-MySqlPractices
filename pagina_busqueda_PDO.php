<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$busqueda=$_GET["buscar"];

try{

	$basedatos=new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'BrizuelaMySQL1999');
	
	$basedatos->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$basedatos->exec("SET CHARACTER SET utf8");
	
	//consulta
	/*$sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = ?";*/
	//conulta con marcador
	$sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = :n_art";
	
	$resultado=$basedatos->prepare($sql);
	//$resultado->execute(array($busqueda));
	$resultado->execute(array("n_art"=>$busqueda));
	
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		
		echo "Nombre del Artículo: " . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro['SECCIÓN'] . " Precio: " . $registro['PRECIO'] .
		" País de Origen: " . $registro['PAÍSDEORIGEN'] . "<br>";
		
		}
		
		$resultado->closeCursor();		

}catch(Exception $e){
	
	die ('Error: ' . $e->GetMessage());
	
}
 
 ?>
</body>
</html>