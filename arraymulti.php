<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

/*Utiliza el código anterior para generar un mensaje en el que se 
indique el último día que tuvo la temperatura máxima más alta del */
# TERMINAR EN CASA
$tempmax = 0;
for ($dia = 0; $dia < count($temperaturas); $dia++){
    if $temperaturas [$dia][2]> $tempmax;
    echo $tempmax = [$dia];
    for $temperaturas [$dia][0];
}
     

?>
</body>
</html>