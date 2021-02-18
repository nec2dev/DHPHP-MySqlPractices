<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin título</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#FFC;
			border:2px solid #F00;
			padding:5ppx;
			
		}
		
		td{
			text-align:center;
			
		}
		
		
		</style>
        
    </head>
    
    <body>
    
        <form action="pagina_eliminar_PDO.php" method="post">
        <table><tr>
          <td>
            C. Artículo</td><td><input type="text" name="c_art" id="c_art"></td></tr>
           <tr>
        
           <tr><td colspan="2"> <input type="submit" name="enviando" value="¡Elimina!">
        </td></tr></table>
        </form>
    
    </body>
    
</html>