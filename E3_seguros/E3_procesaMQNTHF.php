<?php

require "E3_funciones.php";

if($_SERVER['REQUEST_METHOD']== "POST"){
    $aniocarnet= $_POST["aniocarnet"];
    $genero= $_POST["genero"];
    $aniomatricula= $_POST["aniomatricula"];
    $combustible= $_POST["combustible"];
    $tiposeguro= $_POST["tiposeguro"];

    echo calcularSeguro($aniocarnet, $genero, $aniomatricula, $combustible, $tiposeguro);
}
?>