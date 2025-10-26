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
?>