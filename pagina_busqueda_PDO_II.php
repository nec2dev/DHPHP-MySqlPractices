<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$busqueda_sec=$_POST["seccion"];
$busqueda_orig=$_POST["p_orig"];

try{

	$basedatos=new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'BrizuelaMySQL1999');
	
	/*En esta linea, se usa dentro del trycatch de excepiones. 
	El error es una excepcio, que es un objeto que hereda y tiene propiedaes
 métodos, Con esta línea decimos a nuestra BBDD que agarre las ecepciones
 */
	$basedatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$basedatos->exec("SET CHARACTER SET utf8");
	
	//consulta
	/*$sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE NOMBREARTÍCULO = ?";*/
	//conulta con marcador
	$sql = "SELECT NOMBREARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN = :SECC AND PAÍSDEORIGEN= :PORIG";
	
	$resultado=$basedatos->prepare($sql);
	//$resultado->execute(array($busqueda));
	$resultado->execute(array(":SECC"=>$busqueda_sec, ":PORIG"=>$busqueda_orig ));
	
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		
		echo "Nombre del Artículo: " . $registro['NOMBREARTÍCULO'] . " Sección: " . $registro['SECCIÓN'] . " Precio: " . $registro['PRECIO'] .
		" País de Origen: " . $registro['PAÍSDEORIGEN'] . "<br>";
		
		}
		
		$resultado->closeCursor();		

}catch(Exception $e){
	
	//Pedimos el mensaj del error para que lo muestre
	die ('Error: ' . $e->GetMessage());
	
}
 
 ?>
</body>
</html>