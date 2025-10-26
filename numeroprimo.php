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
//primeros 20 términos de la Secuencia de Fibonacci. Esta secuencia comienza por 0 y 1, y el
//resto de términos se pueden calcular sumando los dos anteriores.
//a0 = 0, a1 = 1, an = an-1 + an-2 

// Función para verificar si un número es primo
function esPrimo($num) {
    if ($num < 2) return false; // 0 y 1 no son primos
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Generar y mostrar los primeros 20 números de Fibonacci con su estado primo/no primo
$a = 0;
$b = 1;
echo "Secuencia de Fibonacci y si es primo o no:\n";

for ($i = 1; $i <= 20; $i++) {
    echo "$a: ";
    if (esPrimo($a)) {
        echo "es primo\n";
    } else {
        echo "no es primo\n";
    }
    $temp = $a + $b;
    $a = $b;
    $b = $temp;

}
?>
    
</body>
</html>