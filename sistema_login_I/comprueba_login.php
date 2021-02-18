<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	try{
		
		$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "BrizuelaMySQL1999");
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="SELECT * FROM USUARIO_PASS WHERE USUARIO= :login AND PASSWORD= :password";
		
		$resultado=$base->prepare($sql);
		
		$login=htmlentities(addslashes($_POST["login"]));
		
		$password=htmlentities(addslashes($_POST["password"]));
		
		$resultado->bindValue(":login", $login);
		
		$resultado->bindValue(":password", $password);
		
		$resultado->execute();
		
		$numero_registro=$resultado->rowCount();
		
		if($numero_registro!=0){
			
			/*echo "<h2>Adelante</h2>";*/
			
			session_start();
			$_SESSION["usuario"]=$_POST["login"];
			
			header("location:usuarios_registrados_I.php");
			
		}else{
			
			header("location:login.php");
			
		}
		
	}catch(Exception $e){
	
		die ("Error: " . $e->getMessage());
	}


?>
</body>
</html>