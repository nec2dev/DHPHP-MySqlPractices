<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$busqueda_cart=$_POST["c_art"];

try{

	$basedatos=new PDO('mysql:host=localhost; dbname=pruebas', 'root', 'BrizuelaMySQL1999');
	
	$basedatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$basedatos->exec("SET CHARACTER SET utf8");
	
	
	$sql = "DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO=:c_art";
	
	$resultado=$basedatos->prepare($sql);
	
	$resultado->execute(array(":c_art"=>$busqueda_cart));
	
		echo "El registro se ha eliminado.";
		
		$resultado->closeCursor();		

}catch(Exception $e){
	
	echo "Línea de error: " . $e->getLine();
	
}
 
 ?>
</body>
</html>