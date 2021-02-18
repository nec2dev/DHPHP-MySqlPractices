<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style>

h1{text-align:center;
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
<h1> Ingrese sus datos</h1>

<form action="comprueba_login.php" method="post">

<table>
<tr>
<td class="izq">
Login:</td><td class="der"><input type="text" name="login"></td></tr>
<tr><td class="izq">Password:</td><td class="der"><input type="password" name="password" ></td></tr>

<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>
</body>
</html>