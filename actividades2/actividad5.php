<?php
/*Escribe un script PHP que, dada una edad guardada en una variable, cree un párrafo en el documento 
HTML con un mensaje que indique si corresponde a una persona mayor o menor de edad.*/
$edad = 25;
if($edad >=18){
    echo "Eres mayor de edad";
}else{
    echo "Eres menor de edad";
}
?>