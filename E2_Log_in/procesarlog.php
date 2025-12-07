<?php

require "funcioneslog.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario= $_POST["usuario"];
    $contrasena= $_POST["contrasena"];

    echo comprobarLogin($usuario, $contrasena);
}