<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style>

h1, h2{text-align:center;
}

table{
	width:25%;
	background-color:#9F0;
	border: 2px dotted #009900;
	margin:auto;
}

.izq{text-align:right;
color:#060;
}

.der{text-align:left;
background-color:#0FC;
}

td{
	text-align:center;
	padding:10px;
}

</style>
</head>

<body>

<?php

	$autenticado=false;

	if(isset($_POST["enviar"])){

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
			
			$autenticado=true;
			
			if(isset($_POST["recordar"])){
				
				setcookie("nombre_usuario", $_POST["login"], time() +86400);
				
			}
			
		}else{
			
			echo "Error: Usuario o Contraseña incorrecta";
			
		}
		
	}catch(Exception $e){
	
		die ("Error: " . $e->getMessage());
	}
	}

?>

<?php

	if($autenticado==false){
		
		if(!isset($_COOKIE["nombre_usuario"])){
			
			include("formulario.html");
			
		}
	}
	
	if(isset($_COOKIE["nombre_usario"])){
		
		echo "Hola!! " . $_COOKIE["nombre_usuario"] . "!!!";
		
		}else if($autenticado==true){
			
			echo "Hola!! " . $_POST["login"] . "!!!";
			
		}
?>


<h2>CONTENIDO DE LA WEB</h2>
                <table width="800" border="o">
                <tr>
                <td><img src="1.jpg" width="166" height="166" /></td>
                <td><img src="2.jpg" width="166" height="166" /></td>
                </tr>
                <tr>
                <td><img src="3.jpg" width="166" height="166" /></td>
                <td><img src="4.jpg" width="166" height="166" /></td>
                </tr>
                
                
                
                </table>
                
                <?php
				
					if($autenticado==true || isset($_COOKIE["nombre_usuario"])){
						
						include("zona_usuario.html");
						
					}
				
				
				?>
</body>
</html>