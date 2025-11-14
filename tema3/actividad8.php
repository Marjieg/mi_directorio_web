<?php 
   session_start();
?>
<!DOCTYPE html> 
<html lang=”es”>
   <body> 
      <?php
         if (!isset($_SESSION["usuario"])){ 
        //controla el error, si la variable está vacía ya no aparece warning
            echo "La sesión ya no está activa";
         } 
      ?>
   </body> 
</html>