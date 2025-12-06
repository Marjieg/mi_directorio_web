<!DOCTYPE html> 
<?php
   $nombre_cookie = "usuario";
   $valor_cookie = "María López Gómez";
   setcookie($nombre_cookie, $valor_cookie, time() + 86400 * 30, "/");

    // Cookie 2 (nueva)
   $nombre_cookie2 = "clave";
   $valor_cookie2 = "Qpf5n";
   setcookie($nombre_cookie2, $valor_cookie2, time() + 86400 * 30, "/");
?> 
<html>
   <head> 
      <title>Cookies</title>
   </head> 
   <body>
      <?php 
         if(!isset($_COOKIE[$nombre_cookie])) {
            echo "La cookie " . $nombre_cookie . " no se ha establecido aún!"; 
         }
         else {
            echo "El valor de la cookie " . $nombre_cookie . " es: " . $_COOKIE[$nombre_cookie];
         } 
         if(!isset($_COOKIE[$nombre_cookie2])) {
            echo "La cookie " . $nombre_cookie2 . " no se ha establecido aún!"; 
         }
         else {
            echo "El valor de la cookie " . $nombre_cookie2 . " es: " . $_COOKIE[$nombre_cookie2];
         } 

      ?>
   </body> 
</html>