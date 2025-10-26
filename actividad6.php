<?php 
/*
<?php
   for ($x=0; $x <= 10; $x++) {
      echo $x, “ ”; 
   }
?>
Mejora el código anterior para que no se lleve a la salida el último espacio en blanco.*/
   
 for ($x=0; $x <= 10; $x++){
     echo "$x";
     if($x < 10){  //si es menor que 10 agrega una coma
         echo ","; 
    }
 }
//Escribe scripts PHP para generar:
        //Los números pares comprendidos entre 50 y 80.
echo "<br><h3>Los números pares comprendidos entre 50 y 80 son: </h3><br>";//he puesto h3 para resaltar el título
for ($x=50; $x<=80; $x +=2){ //empezando en 50, mientras sea menor o igual que 80, suma 2
    echo "$x";
    if($x < 80){ //si es menor que 80, agrega una coma
        echo ",";
    }
}
//Los números enteros entre 17 y -17.
echo "<br><h3>Los números enteros entre 17 y -17 son :</h3><br>"; 
for($x=-17;$x<=17;$x++){
    echo "$x,";
}
//La tabla de multiplicar del número 6..
echo "<br><h3>La tabla de multiplicar del número 6..</h3><br>";

for($x=1;$x<=10;$x++){
    $resultado= $x * 6; 
    echo "$resultado,";
}
?>