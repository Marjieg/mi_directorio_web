<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php

/*Escribe un script que, dados los valores de una matriz de 5 filas y 5 columnas, 
haga uso de dos funciones creadas por ti para calcular:La matriz traspuesta. La suma de ambas matrices.*/


#filas por columnas --> 
function traspuesta (array $matriz){
    $filasmatriz = count($matriz);
    $columnasmatriz = count($matriz[0]);
    $matriztraspuesta = array(); #inicializo un array vacio para almacenar la matriz traspuesta

    for ($i = 0; $i < $columnasmatriz; $i++){
        for($j = 0; $j < $columnasmatriz; $j++){
            $matriztraspuesta[$j][$i] = $matriz[$i][$j];
        }  
      }
    return $matriztraspuesta;

}

function imprimir ($matriz, $título) {
    echo "<table>"; # creo la tabla
    echo "$título"; 
for ($i=0; $i <5; $i++){
      echo "<tr>";
      for ($j = 0; $j < 5; $j++) {
         echo "<td>", $matriz[$i][$j],"</td>"; 
      }
      echo "</tr>"; 
   }
   echo "</table>"; #cierro la tabla

}

$matriz= array(
    array(1, 2, 3, 3, 6),
    array(4, 5, 6, 7, 2),
    array(7, 8, 9, 3, 1),
    array(3, 2, 3, 2, 1),
    array(4, 4, 4, 5, 2),
);
$matriztraspuesta = array();
imprimir($matriz, "matriz origen");
$matriztraspuesta = traspuesta ($matriz);
imprimir($matriztraspuesta, "matriz traspuesta");

function suma ($matriz, $matriztraspuesta) {
    $filasmatriz + $i;
    
}


?>
</body>
</html>