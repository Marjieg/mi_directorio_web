<?php 
/*Tienes un array con las notas de varios alumnos:
$notas = [
    "Marina" => 9,
    "Pablo" => 6,
    "Lucía" => 4,
    "Sofía" => 8,
    "Carlos" => 5
];
Tienes que escribir un programa que:
Recorra las notas,
Muestre el nombre del alumno y su nota,
Y además indique si está aprobado (≥5) o suspenso (<5).*/

$notas = [
    "Marina" => 9,
    "Pablo" => 6,
    "Lucía" => 4,
    "Sofía" => 8,
    "Carlos" => 5
];
foreach($notas as $nombre=> $nota){
    if ($nota >=5){
        echo "¡has aprobado! ";
    }else{
        echo "¡has suspendido! ";
    }
echo "La nota de $nombre es $nota<br>";
}
//Escribe un script PHP que realice las siguientes acciones:
//  Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
// Una vez que ha inicializado el array, imprimir todos los valores que almacena.

$array = [];
for($i=0;$i<10;$i++){ //para hasta 10 elementos
    $array[]=rand(1,30); //haz esto, crea el array para cada elemento con valores aleatorios hasta 30
}
print_r($array);
/* Escribe un script PHP que realice las siguientes acciones:
    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena.
    Calcular el valor medio de los valores del array.
    Mostrar el valor medio que ha calculado.*/ 

$array =[];

for($i=0;$i<=10;$i++){
    $array[]=rand(1,30);
    echo "<br>";
}
print_r($array);

$suma=0;
for($i=0;$i<=10;$i++){
    $suma += $i;
    $vmedio = ($suma / 10);
    echo "<br>";
}
 echo "$vmedio<br>";
 //Buscar el valor máximo de los valores del array.
 // Muestre el valor máximo que ha encontrado.
$maximo = max($array);
echo "el máximo es $maximo <br>";
//Buscar el valor mínimo de los valores del array.
// Muestre el valor mínimo que ha encontrado.
$minimo = min($array);
echo " el mínimo es $minimo <br>";

/*Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

    Calcular la media.
    Calcular el valor máximo.
    Calcular el valor mínimo.
    Mostrar todos los valores calculados.

El array de temperaturas lo vamos a generar con números aleatorios.
 El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.*/

$temperaturas =[];

for($i=0;$i<=10;$i++){
    $temperaturas[] = rand(1,30);
    echo"<br>";
}
print_r($temperaturas);


 $suma2=0;
 for($i=0;$i<=10;$i++){
    $suma2 += $i;
    $tempMedia = ($suma2 / 10);
 }

echo $tempMedia;

$maximoT = max($temperaturas);
echo "la temperatura máxima es $maximoT";















?>