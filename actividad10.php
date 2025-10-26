<?php

 /*  function saludo($nombre = "compañero") {
      echo "<div>Encantado de conocerte, ", $nombre, ". </div>"; 
   }
   saludo("Alejandro"); saludo("Patricia"); saludo();

 function triple(&$numero) {
      $numero *= 3; 
   }
  $num = 2; 
   triple($num); 
   echo $num;*/

   //Modifica el código anterior de forma que la función devuelva 
   // el triple del número que le ha sido enviado y que este resultado sea mostrado fuera de la función.
 //declare(strict_types=1);
 /*function triple(&$numero) {
      $numero *= 3; 
   }
  $num = 2; 
   triple($num); 
   echo $num;*/

function triple($numero) {
      $numero *= 3; 
      return $numero;
   }
   $num = 2.75;
   echo triple($num); 
?>