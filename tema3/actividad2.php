<!DOCTYPE html> <html lang=”es”>
<head> <title>OPERACIONES</title>
</head> <body>
<?php 
$num1=$_POST["numero1"];
$num2=$_POST["numero2"];
$suma = $num1+$num2;
$resta = $num1-$num2;
$multi =$num1*$num2;
$divi =$num1/$num2;
echo "<p>Resultado de sumar, ", $num1, " y ", $num2, " es ",$suma."</p>";
echo "<p>Resultado de restar, ", $num1, " y ", $num2, " es ",$resta."</p>";
echo "<p>Resultado de multiplicar, ", $num1, " y ", $num2, " es ",$multi."</p>";
echo "<p>Resultado de dividir, ", $num1, " y ", $num2, " es ",$divi."</p>";
?> </body>
</html>