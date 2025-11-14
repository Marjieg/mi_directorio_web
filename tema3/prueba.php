<?php 
   session_start();
?>
<!DOCTYPE html> 
<html lang=”es”>
   <body> 
      <?php
         $_SESSION["usuario"] = "123456";
         $_SESSION["rol"] = "cliente"; 
//Explica qué es $_SESSION en el código anterior.
//son variables que son guardadas para ser utilizadas dentro del mismo script
//
      ?>
   </body> 
</html>