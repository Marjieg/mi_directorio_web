<?php
/*PRACTICA 6
Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos enteros:
$num = rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre
1 y 100. Hacer un programa que lo muestre por pantalla al valor generado. Mostrar ademas si es
menor o igual a 50 o si es mayor. Para imprimir el contenido de una variable tambien utilizamos el
comando ECHO*/

$num = rand(1,100);

if($num < 50){
    echo "$num es menor que 50";
}else{
    echo "$num es mayor que 50 <br> ";
}
/*PRACTICA 7
Definir una variable de cada tipo: integer, double, string y boolean. Luego imprimirlas en la pagina, una
por linea*/

$a = (20);
$b = (1.5);
$c = ("hola");
$d = TRUE;
echo "$a <br> $b <br> $c <br>  $d<br>";
/*PRACTICA 9
Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el numero (Ej. Si se genera el 3
lugo mostrar en la pagina el string “tres”). Para ver si una variable es igual a cierto valor debemos
plantear una condicion similar a:
If ($valor==3)
{
//algorimo
}*/
$num2 = rand(1,5);

if ($num2 == 1){
    $numletra = 'uno';
    echo $numletra;
}elseif($num2 == 2){
    $numletra = 'dos';
    echo $numletra;
}elseif($num2 == 3){
    $numletra = 'tres';
    echo $numletra;
}elseif($num2 == 4){
    $numletra = 'cuatro';
    echo $numletra;
}elseif($num2 == 5){
    $numletra = 'cinco';
    echo $numletra;
}
echo "----------------------------------------------<br>";
/* Crearemos una tabla de valores de seno y coseno de 0 a 2
en incrementos de 0.01. Los valores negativos que resulten los queremos
mostrar en rojo, y los valores positivos en azul */
/* Variacion. Un color diferente cada fila que se imprima
Para que funcione bien, necesitamos que la variable renglon se tome
"desde afuera" y no de manera local dentro de la funcion*/
/* Variacion. Un color diferente cada fila que se imprima */
$renglon = 0;

function muestra($valor){
    global $renglon;
    if($renglon % 2){
        $fondo = "#eeeeeeff";
    }else{
        $fondo = "#ddddddff";
    }if($valor < 0.5){
        $color = "red";
    }else{ 
        $color = "blue";
    echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
    }
}

echo "<table border='1'>";

$nrenglon = 0.5;
for($x=0; $x<=2; $x+=0.01){
    echo "<tr>";
    muestra($x);
    muestra(sin($x));
    muestra(cos($x));
    echo "</tr>";
}


?>