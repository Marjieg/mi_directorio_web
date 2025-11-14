<!DOCTYPE html> 
<html lang=”es”>
   <head> 
      <title>Formulario</title>
   </head> 
   <body>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
         <label>Nombre: </label><input type="text" name="npila"/>
         <input type="submit"/>
      </form> 
      <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            echo $_POST['npila'];
         } 
         
         foreach($_SERVER as $key => $valor){
            echo "$key / $valor<br>";
         }
        
      ?>
   </body> 
</html>