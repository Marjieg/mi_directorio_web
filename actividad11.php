<?php

/*Escribe un programa que, dados los valores de la base y la altura de un rectángulo, utilice una función para cada una de estas tareas:
    Devolver su área. 
    Devolver su perímetro.
    Intercambiar los valores de su base y su altura.*/

$base = "20.60";  //declaro las variables que voy a usar
$altura ="40";

function areaRectangulo($base,$altura){  //creo la función para calcular el área
    $area= ($base*$altura);
    echo "el área del rectángulo con base=$base y altura=$altura es $area<br>";
}
function perimetroRectangulo($base,$altura){  //creo la función para calcular el perímetro
    $perimetro= ($base+$altura)*2;
    echo "el perímetro del rectáncgulo con base=$base y altura=$altura es $perimetro<br>";
}
function intercambioDatos($base,$altura){
    $x = $base; // le doy un valor a la base que va a ser la variable $x
    $base = $altura; //le digo a la función que ahora la base es igual que el valor de la variable altura
    $altura = $x; //le digo ahora que a altura le de el valor de la variable $x
    echo "después del intercambio base =$base y altura =$altura<br>";
    areaRectangulo($base,$altura); //llamo a las funciones que he creado antes
    perimetroRectangulo($base,$altura);
}

areaRectangulo($base,$altura);  //si no llamo a la función no se imprime nada fuera
perimetroRectangulo($base,$altura); // lo mismo
intercambioDatos($base,$altura);

?>