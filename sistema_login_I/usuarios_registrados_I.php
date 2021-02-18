<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

	session_start();
	
	if(!isset($_SESSION["usuario"])){
		
		header("location:login.php");
		
	}

?>

<h1>Bienvenidos Usuarios!</h1>

<?php

	echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

?>

<p><a href="cierre.php">Cierra Sesión</a></p>

<p>Esto es información solo para usuarios registrados</p>
<table width="56%" height="129" border="1">
  <tr>
    <td colspan="3" align="center">Zona Usuarios Registrados</td>
  </tr>
  <tr>
    <td align="center" valign="middle"><a href="usuarios_registrados_II.php">Pagina 1</a></td>
    <td align="center" valign="middle"><a href="usuarios_registrados_III.php">Pagina 2</a></td>
    <td align="center" valign="middle"><a href="usuarios_registrados_IV.php">Pagina 3</a></td>
  </tr>
</table>
</body>
</html>