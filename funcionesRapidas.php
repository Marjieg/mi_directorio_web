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

/*3. Función cuentaLetra( $cadena, $letra) : entero
Sin usar funciones externas (excepto la función strlen()), recibe un string con una cadena y un string con una
letra, devuelve el número de veces que la letra aparece en la cadena. (pista, cadena se puede tratar como si
fuera un array)*/


function cuentaLetra($cadena,$letra){
    $contador=0;
    $posicion=0;
    while (($posicion = strpos($cadena, $letra, $posicion)) !== false) {
        $contador++;
        $posicion = $posicion + strlen($letra); # Avanza para evitar repeticiones
    }
    return $contador;
}

echo "la 'x' se repite en 'extramadurax' ".cuentaLetra("extramadurax","x").$contador."<br>";




?>