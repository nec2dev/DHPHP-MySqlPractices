<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$busqueda_cart=$_POST["c_art"];
$busqueda_seccion=$_POST["seccion"];
$busqueda_nart=$_POST["n_art"];
$busqueda_precio=$_POST["precio"];
$busqueda_fecha=$_POST["fecha"];
$busqueda_importado=$_POST["importado"];
$busqueda_porig=$_POST["p_orig"];

try{

	$basedatos=new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'BrizuelaMySQL1999');
	
	$basedatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$basedatos->exec("SET CHARACTER SET utf8");
	
	
	$sql = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES(:c_art,:seccion, :n_art, :precio, :fecha, :importado, :p_orig)";
	
	$resultado=$basedatos->prepare($sql);
	
	$resultado->execute(array(":c_art"=>$busqueda_cart, ":seccion"=>$busqueda_seccion, ":n_art"=>$busqueda_nart, ":precio"=>$busqueda_precio, ":fecha"=>$busqueda_fecha, ":importado"=>$busqueda_importado, ":p_orig"=>$busqueda_porig));
	
		echo "Se ha ingresado el registro correctamente.";
		
		$resultado->closeCursor();		

}catch(Exception $e){
	
	echo "Línea de error: " . $e->getLine();
	
}
 
 ?>
</body>
</html>