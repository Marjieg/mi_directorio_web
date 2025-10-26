<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Dado un número entero, devuelve todos sus divisores 
$n = rand(1,100);

echo "Los divisores de $n son; ";

for ($i = 1; $i <=$n; $i++) {
    if($n % $i == 0) {    //% comprueba si el numero es divisible por el valor actual
       echo $i . " ";     // si es divisible, lo muestra como un divisor
    }
}

    ?>
</body>
</html>