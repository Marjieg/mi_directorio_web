<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$radio = 12;

// Longitud de la circunferencia = 2 * π * radio
$longitud = 2 * pi() * $radio;

// Área del círculo = π * radio^2
$area = pi() * pow($radio, 2);
echo "Longitud de la circunferencia: " . $longitud . " cm\n";
echo "Área del círculo: " . $area . " cm²\n";

// Un saludo, utilizando dos variables, la primera contiene “Buenos” y la segunda “días”. 
$buenos = "Buenos";
$dias = "días";
echo $buenos ." ". $dias;
?>
 
</body>
</html>