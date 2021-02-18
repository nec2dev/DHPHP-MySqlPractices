<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>

table{
	widht:30px;
	marin:auto;
	background-color:#CF0;
	border:2px solid #C30;
	padding:5px;


</style>
</head>

<body>
/*<form action="pagina_busqueda_PDO_II.php" method="get">
cambiamos get por pot ya que por get manda la informacion por
URL y es visible a cualquiera tambien si pasamos muchos parámetros
la URL queda muy extensa y muchas veces es penalizada por los buscadores*/
<form action="pagina_busqueda_PDO_II.php" method="post">

<table><tr><td>
Sección: </td><td><input type="text" name="seccion">
País de Origen: </td><td><input type="text" name="p_orig"></td></tr>
<tr><td colspan="2"> <input type="submit" name="enviando" value="Dale!">
</td></tr></table>
</form>



</body>
</html>