<?php
/*Escribe un script que haga uso de una función para generar salidas como la siguiente a partir del nombre de una persona, su lugar y año de nacimiento:
Alejandro nació en Madrid en el año 2004.
Patricia nació en Valencia en el año 2006.*/

$personas = [
    "Alejandro"=>["ciudad"=>"Madrid","año"=>"2004"],
    "Patricia"=>["ciudad"=>"Valencia","año"=>"2006"],
];

function mostrarDatos($nombre,$ciudad,$año){
    echo "$nombre nació en $ciudad en el $año.<br>";
}

foreach ($personas as $nombre=>$datos){
    mostrarDatos($nombre,$datos["ciudad"],$datos["año"]);
}

?>