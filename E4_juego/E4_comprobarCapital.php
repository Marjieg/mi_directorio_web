<?php

// Incluimos el listado de países y capitales
include "./E4_relacionPaisesEU.php";


function comprobarCapital($pais, $capital){
    global $EU; // accedemos al array asociativo definido fuera
    echo "probando $pais para $capital </br>";
    if($EU[$pais] ===$capital){
        echo "la $capital es correcta para $pais";
    }else{
        echo "la ciudad de $pais es $EU[$pais]";
    }
}


if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $pais= $_POST["pais"];
    $capital= $_POST["capital"];

    echo comprobarCapital($pais, $capital);
}
?>