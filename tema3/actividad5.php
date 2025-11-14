<?php 
   session_start();
?>
<!DOCTYPE html> 
<html lang=”es”>
   <body> 
      <?php
         echo "<div>Usuario: ", $_SESSION["usuario"], "</div>";
         echo "<div>Rol: ", $_SESSION["rol"], "</div>";
         //el anterior a este es prueba.php
         session_unset();
         echo $_SESSION["usuario"];
         echo $_SESSION["rol"];
      ?> 
   </body>
</html>