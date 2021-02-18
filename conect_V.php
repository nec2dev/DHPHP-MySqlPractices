<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
    /*td{
      width: 100px;
    }*/
    /*body{
      width: 50%;
      margin: auto;
    }*/
	table{	width:50%;
		border:1px dotted #39C;
		margin:auto;
}
  </style>
  <body>
<?php  
 
 require 'conect_datos.php';
 
 $conexion = mysqli_connect($db_host, $db_user, $db_contrasena, $db_nombre); // conexion a base de dato.
 

 if(mysqli_connect_errno($conexion)){
  echo "Fallo al conectar con la BBDD";
  exit();
 }
 
 mysqli_set_charset($conexion, "utf8");

 $query = "select * from productos where paísdeorigen='españa'";
 
 $consulta = mysqli_query($conexion, $query);

 echo "<div class='container'>
   <table class='table'>"; // apertura de tabla

 while($tabla = mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
  echo "<tr>
    <td>";
     
     foreach ($tabla as $i){
      echo $i;
     }
  echo " </td>
     </tr>
     <br>";
  
 }
 
 echo "</table>"; // cierre de tabla
 
 mysqli_close($conexion);
 
 ?>

  </body>
</html>