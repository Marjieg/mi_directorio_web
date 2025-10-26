<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*Escribir un programa que contenga las siguientes constantes, variables y valores:
constante EURO_DOLAR con valor 1.05, que es los dólares que vale un euro.
variable $nombre con valor “Fulanito Pérez Pérez”
variable $entrega con valor 520.5
el resto de los datos se calculan (se usa también la función date)
y cuando se ejecute salga esto: */


define("EURO_DOLAR", 1.05);
$nombre = "Fulanito Pérez Pérez";
$entrega = 520.5;

$euros = $entrega / EURO_DOLAR;

$fecha = date("d/m/Y"); 

echo "Fecha: $fecha<br>";
echo "Nombre: $nombre<br>";
echo "Cantidad entregada en dólares: $entrga<br>";
echo "Equivalente en euros: .number_format($euros, 2)";


?>
    
</body>
</html>