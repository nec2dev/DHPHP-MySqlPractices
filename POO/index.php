<?php

	require "devuelve_productos.php";
	
	$productos = new DevuelveProductos();
	
	$array_productos=$productos->get_productos();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	foreach($array_productos as $elemento){
		
		echo "<table><tr><td>";
		echo $elemento['CÓDIGOARTÍCULO'] . "</td><td>";
		echo $elemento['NOMBREARTÍCULO'] . "</td><td>";
	 	echo $elemento['SECCIÓN'] . "</td><td>";
	 	echo $elemento['PRECIO'] . "</td><td>";
		echo $elemento['FECHA'] . "</td><td>";
		echo $elemento['IMPORTADO'] . "</td><td>";
	 	echo $elemento['PAÍSDEORIGEN'] . "</td><td></tr></table>";
	 	echo "<br>";
		echo "<br>";
	}
		

?>
</body>
</html>