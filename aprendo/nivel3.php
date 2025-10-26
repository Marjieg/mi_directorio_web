<?php 
//(comparar dos números y decir cuál es mayor o si son iguales)
$numero1 = (4);
$numero2 = (4);

if($numero1 > $numero2){
    echo "$numero1 es mayor que $numero2";
}elseif($numero1 < $numero2){
    echo "$numero2 es mayor que $numero1";
}else{
    echo "los dos números son iguales";
}

//mostrar solo números pares del 2 al 20 con un bucle for

for($i=2;$i<=20;$i+=2){
    echo "numeros pares hasta el 20 $i<br>";
}
?>