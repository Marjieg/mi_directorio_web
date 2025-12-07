<?php
require "E1_funcionesNIF.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $NIF = $_POST["NIF"];
    
    echo verificadorNIF($NIF);
}
?>
