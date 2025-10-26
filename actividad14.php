<?php
   $temperaturas = array (
      array(1,12,26), 
      array(2,11,24), 
      array(3,15,24)
   );
   echo "<table><caption>Tabla de temperaturas</caption>";
   echo "<tr><th>Día</th><th>Mínima</th><th>Máxima</th></tr>"; 
   for ($dia = 0; $dia < 3; $dia++) {
      echo "<tr>";
      for ($col = 0; $col < 3; $col++) {
         echo "<td>", $temperaturas[$dia][$col],"</td>"; 
      }
      echo "</tr>"; 
   }
   echo "</table>"; 

//Utiliza el código anterior para generar un mensaje 
// en el que se indique el último día que tuvo la temperatura máxima más alta del mes.

 //me resulta más fácil de endenter, esta forma de representar el array bidimensional-->
$temperaturas = [ 
      [1,12,26], 
      [2,11,24], 
      [3,15,24]
 ];

$maxTempencontrada= 0; //inicializo mis contadores, el de la tempe máx encontrada y el dia de mayor tempe
$diaMax= 0; 
foreach($temperaturas as $fila){
    //cada $fila =  [dia,min,max]
    $dia = $fila[0];
    $tempemax =$fila[2];
    // Si $maxTemp es null (primera iteración) o encontramos >=, actualizamos
        if ($tempemax >= $maxTempencontrada) { //si la temperatura maxima de ese dia es mayor o igual que la temperatura máxima encntrada-->
            $maxTempencontrada = $tempemax;  //la temperatura máxima encontrada es igual a la temperatura máxima de ese mismo dia;
            $diaMax = $dia;                 //por lo que dia de la temperatura más alta corresponde con ese día
        }
    }
    echo "El último día que tuvo la temperatura máxima más alta fue el día $diaMax con $maxTempencontrada °C";

?>