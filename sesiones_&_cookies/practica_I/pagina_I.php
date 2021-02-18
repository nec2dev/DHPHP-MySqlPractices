<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

	if(isset($_COOKIE["idioma_seleccionado"])){
		
		if($_COOKIE["idioma_seleccionado"]=="es"){
		
		header("Location:espaniol.php");
		
	}else if($_COOKIE["idioma_seleccionado"]=="en"){
		
		header("Location:english.php");
		
	}
		
	}

?>

<table width="25%" border="0" align="center">
<tr>
<td colspan="2" align="center"><h1>Elija el Idioma</h1></td>
</tr>
<tr>
<td align="center"><a href="crea_cookie.php?idioma=es"><img src="img/arg.png" width="90" height="60"></a></td>
<td align="center"><a href="crea_cookie.php?idioma=en"><img src="img/aust.png" width="90" height="60"></a></td>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>