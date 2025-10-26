<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//Devuelve el factorial de 10.--> 

$n = 10;
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i; // equivale a: $factorial = $factorial * $i;
}

echo "El factorial de $n es $factorial";
    ?>
    
</body>
</html>