<!DOCTYPE html> 
<?php
   // Cookie original
   $nombre_cookie = "usuario";
   $valor_cookie = "María López Gómez";
   setcookie($nombre_cookie, $valor_cookie, time() + 86400 * 30, "/");
   // Cookie 2
   $nombre_cookie2 = "clave";
   $valor_cookie2 = "Qpf5n";
   setcookie($nombre_cookie2, $valor_cookie2, time() + 86400 * 30, "/");
   // Nuevo valor para la cookie 'usuario'
   $nuevo_valor = "Francisco Ruiz Martín";
   setcookie($nombre_cookie, $nuevo_valor, time() + 86400 * 30, "/");
?>
<html>
   <head> 
      <title>Cookies</title>
   </head> 
   <body>
      <?php 
         echo "<h3>Comprobación después de modificar la cookie:</h3>";
         if(!isset($_COOKIE[$nombre_cookie])) {
            echo "La cookie '$nombre_cookie' no se ha establecido aún!<br>";
         }
         else {
            echo "El valor de la cookie '$nombre_cookie' es: " . $_COOKIE[$nombre_cookie] . "<br>";
         }
         if(!isset($_COOKIE[$nombre_cookie2])) {
            echo "La cookie '$nombre_cookie2' no se ha establecido aún!<br>";
         }
         else {
            echo "El valor de la cookie '$nombre_cookie2' es: " . $_COOKIE[$nombre_cookie2] . "<br>";
         }
         var_dump($_COOKIE);
        
      ?>
   </body> 
</html>
