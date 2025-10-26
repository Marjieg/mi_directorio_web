<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Dado un número entero, envía un mensaje para señalar si es primo o no. 10. Devuelve los

$numero = 7;
$es_primo = true;

if ($numero <= 1) {
    $es_primo = false;
} else {
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $es_primo = false;
            break;
        }
    }
}

if ($es_primo) {
    echo "$numero es primo<br>";
} else {
    echo "$numero no es primo<br>";
}


//primeros 20 términos de la Secuencia de Fibonacci. Esta secuencia comienza por 0 y 1, y el
//resto de términos se pueden calcular sumando los dos anteriores.
//a0 = 0, a1 = 1, an = an-1 + an-2 --REVISAR Y SIMPLIFICAR --debrían aparecer los 20 números

$a = 0;
$b = 1;

echo "Primeros 20 números de Fibonacci:<br>";
echo $a . ", ";
echo $b . ", ";

for ($i = 3; $i <= 20; $i++) {
    $siguiente = $a + $b;
    echo $siguiente;
    if ($i < 20) {
        echo ", ";
    }
    $a = $b;
    $b = $siguiente;
}



?>
    
</body>
</html>