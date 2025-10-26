<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Dados dos números,
//envíe un mensaje que señale el más grande.
$a = -8;
$b = 12;

if ($a > $b) {
    echo "$a es mayor que $b";
} else {
    echo "$b es mayor que $a";
}
//Mejore el código anterior para mostrar si ambos números son iguales.
//CORREGIR

$a = -8;
$b = 12;
if ($a > $b) {
    echo "$a es mayor que $b";
} elseif ($a < $b) {
    echo "$a es menor que $b";
} else {  // aquí es cuando $a == $b
    echo "$a y $b son iguales";
}
            

?>

</body>
</html>