<?php 
   session_start();
?>
<!DOCTYPE html> 
<html lang=”es”>
   <body> 
      <?php
         $_SESSION["usuario"] = "123456";
         $_SESSION["rol"] = "proveedor"; 
      ?>
   </body> 
</html>