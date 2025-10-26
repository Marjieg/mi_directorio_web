<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    # Escribe un script que, dada una cadena de caracteres, 
    #genere un mensaje que indique si es, o no, un palíndromo. 
    #Se dice que una cadena es un palíndromo si el resultado
    # de leerla de izquierda a derecha y de derecha a izquierda es el mismo.
#Ejemplos son “salas”, “rallar”, “ata”.

   $cadena = ("salas");
 
   if (strrev($cadena) == $cadena){
    echo "es palíndromo";
   }else{ 
        echo "no es palíndromo";
   }
    #Escribe un script que, dadas dos cadenas de caracteres, genere un mensaje que indique
    # el número de veces que la primera está incluida en la segunda.
#Por ejemplo la cadena "la caracola está en la playa" contiene la cadena "la" 5 veces.

$cadena1=("la caracola está en la playa");
$cadena2=("caracola");
    #numero de veces que cadena cadena1 está en cadena2 -->
    #primero tendria que usar una función que buscase "la" dentro de cadena1
 


# tengo que hacer un bucle que recorra la cadena y me vaya
# devolviendo la cadena que quiero contar hasta el final
#tengo que poner unos contadores para poder hacer el bucle

$contador = 0;
$posicion = 0;

# Mientras el resultado de la función strpos me devuelva un resultado con una posición, 
# tiene que seguir avanzando por la cadena y strlen()
# va contando el numero de caracter por el que va y sumando, para no repetir
while (($posicion = strpos($cadena1, $cadena2, $posicion)) !== false) {
    $contador++;
    $posicion = $posicion + strlen($cadena2); # Avanza para evitar repeticiones
}

echo "La subcadena '$cadena2' aparece $contador veces en la cadena";


    ?>
    
</body>
</html>