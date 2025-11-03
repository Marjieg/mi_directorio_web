<?php
/*
Escribe un script que, dados los valores de una matriz de 5 filas y 5 columnas, haga uso de dos funciones
creadas por ti para calcular:
    La matriz traspuesta.
    La suma de ambas matrices.*/
#filas por columnas --> 
function traspuesta (array $matriz){
    $filasmatriz = count($matriz);  //cuenta cuántas filas hay
    $columnasmatriz = count($matriz[0]); //cuenta cuántas columnas hay
    $matriztraspuesta = []; #inicializo un array vacio para almacenar la matriz traspuesta
    //recorre las filas y las columnas
    for ($i = 0; $i < $filasmatriz; $i++){
        for($j = 0; $j < $columnasmatriz; $j++){
            $matriztraspuesta[$j][$i] = $matriz[$i][$j];
        }  
      }
    return $matriztraspuesta; //devuelve la matriz traspuesta
}

function imprimir ($matriz, $título) {
    echo "<table>"; # creo la tabla
    echo "$título"; 
for ($i=0; $i <5; $i++){  //si la filas son menos que 5, suma 1
      echo "<tr>";
      for ($j = 0; $j < 5; $j++) { //si la columna es menos que 5, suma 1
         echo "<td>", $matriz[$i][$j],"</td>"; //imprime la matriz como si fuera una tabla
      }
      echo "</tr>"; 
   }
   echo "</table>"; #cierro la tabla

}
//matriz original
$matriz= array(
    array(1, 2, 3, 3, 6),
    array(4, 5, 6, 7, 2),
    array(7, 8, 9, 3, 1),
    array(3, 2, 3, 2, 1),
    array(4, 4, 4, 5, 2),
);

function suma($matriz1, $matriz2) {
  $matrizsuma= [];  //creo un array vacio para guardar la suma
  for($i=0 ;$i < count($matriz1); $i++){
    for($j =0; $j < count($matriz1[0]); $j++){
        $matrizsuma[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j]; //
    }      //suma elemento a elemento
  }
    return $matrizsuma; //devuelve el resultado
}

imprimir($matriz, "matriz origen");
$matriztraspuesta = traspuesta($matriz);
imprimir($matriztraspuesta, "matriz traspuesta");
$matrizsuma = suma($matriz, $matriztraspuesta);
imprimir($matrizsuma, "matriz suma");


?>