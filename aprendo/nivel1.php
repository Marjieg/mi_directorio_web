<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Pide un número y muestra si es positivo o negativo.
$numero = -2;

if ($numero >= 0){
    echo ("es positivo");
}else{
    echo("es negativo");
}
//Haz un bucle for que cuente del 1 al 10 y muestre cada número.

for($i=1;$i<=10;$i++){
    echo "contando $i <br>";
}
//El siguiente ejemplo muestra los números del 10 al 1.

for ($i=10; $i >= 1; $i--){
    echo $i;
    echo "<br>";
}
//Escribe un script PHP que muestre los números del 1 al 10 en una tabla 
//de una fila y 10 columnas. Utiliza un bucle for
echo "<table border='1'><tr>";
for($i=1;$i<=10;$i++){
    echo "<td>$i</td>";
}
echo "</tr></table><br>";
//Escribe un script PHP que muestre los números del 1 al 10 en una tabla 
//de una columna y 10 filas. Utiliza un bucle for.tr filas, td columnas

echo "<table border='1'><tr>";
for($i=1;$i<=10;$i++){
    echo "<tr><td>$i</td></tr>";
    
}
echo "</table>";

//Escribe un script PHP que muestre en una tabla los números pares que 
// existen entre 1 y 100. Utiliza un bucle for.

for($i=1;$i <=100;$i++){
    if($i % 2 == 0){
        echo "$i,";
    }
}
//Escribe un script PHP que muestre la tabla de multiplicar de un número 
// aleatorio. Utiliza un bucle for
$num = rand(1,10);
echo $num;
for($i=0;$i<=10;$i++){
    $multi = $num * $i;
    echo "$num * $i = $multi<br>";
}
//Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for

for($i=1;$i<=10;$i++){
  for($j=1;$j<=10;$j++){
    $multi = $i * $j;
    echo "$i x $j = $multi<br>";
  }
}
    ?>
    
</body>
</html>