<?php
/*Crear un archivo php (sólo php!), llamado funcionesRapidas.php para crear las siguientes funciones:
1. Función esPar(numero): string
Recibe como parámetro numero, que devuelve “par” si numero es par o “impar” si es impar, si numero no
es entero devuelve “valor no valido”.
(pista función is_int(element)-> devuelve true si es entero o false si es “otra
cosa”)*/

function esPar($numero){
    if(!is_int($numero)){ //comprobamos si es entero
        return "valor no válido";
    }
    if($numero % 2 == 0){ //comprobamos si es par
        return "par";
    }else{
        return "impar";
    }
}

echo "4 es " .esPar(4). "<br>";
echo "5 es " .esPar(5). "<br>";
echo "67.8 es ".esPar(67.8). "<br>";
echo "pepelu es ".esPar("pepelu")."<br>";
/*2. Función ordenaDos($valorA, $valorB): string dados dos valores cualesquiera 
los saca en un string ordenados ascendentemente, separados por coma.*/

function ordenaDos($valorA,$valorB){
    if($valorA <= $valorB){
        return $valorA . ",". $valorB;
    }else{
        return $valorB . ",". $valorA;
    }
}
echo '8 y 7 dan '. ordenaDos(8,7) ."<br>";
echo "'HOLA' y 'JUAN' dan". ordenaDos('HOLA','JUAN')."<br>";
echo "'HOLA' y 8 dan '". ordenaDos("HOLA",8)."<br>";
echo 'TRUE Y FALSE dan '.ordenaDos(TRUE,FALSE)."<br>";

?>