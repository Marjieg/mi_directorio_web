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


define("EURO_DOLAR", 1.05); //defino la costante, nombre y valor asociado
$nombre = "Fulanito Pérez Pérez";
$entrega = 520.5;

$euros = $entrega * EURO_DOLAR; //aquí calulo la conversión de euros a dolares

$fecha = date("d/m/Y"); 

echo "<table><tr><th>SU RECIBO DE CAMBIO DE EUROS A DOLARES</th></tr><br>";
echo "<tr><td>SR/A: $nombre</td></tr>";
echo "<td>entrega: $entrega</td>"; //esto son euros no dolares!
echo "<tr><td>recibe:".number_format($euros, 2)."</td></tr><br>";
echo "<td>Fecha: $fecha</td></table>";
//terminar de dar el formato a la tabla
// var_dump($precio) --> esto me imprime lo que necesite saber
?>
    
</body>
</html>