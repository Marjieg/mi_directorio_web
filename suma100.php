<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Devuelve la suma de los números del 1 al 100 REHACER CON UN WHILE Y UN FOR


$suma = 0;
$i = 1;

while ($i <= 100) {
    $suma += $i;
    $i++;
}

echo "Suma del 1 al 100: $suma<br>";

//se puede hacer con for también
$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}

echo "Suma del 1 al 100: $suma<br>";

?>
</body>
</html>