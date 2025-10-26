<?php 
/* Escribe un programa que cree un array indexado con el nombre de los módulos de tu curso y,
 a continuación, lleve a la salida un título y, haciendo uso de un bucle foreach, la lista de estos..*/
$modulos = ["SRI","IAW","PYTHON","ASO","ASGBD","IPE2","SAD","INGLES"];
echo "Lista de asignaturas este año:<br>";
foreach($modulos as $modulo){
    echo  "$modulo<br>";
}

//Modifica el código anterior para sustituir el bucle foreach por un bucle for

echo "Lista de asignaturas este año usando un bucle for:<br>";
for($i=0;$i<count($modulos);$i++){ //le digo al bucle que empieze en 0, que mientras i sea menor 
    echo "$modulos[$i]<br>";        //que el numero de modulos, sume una vuelta, para eso uso count, es como cuentame lo que sea de aquí dentro
}                                   //al final le digo, imprime cada posición del array


?>