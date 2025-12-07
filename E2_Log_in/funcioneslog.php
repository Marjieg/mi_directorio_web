<?php


function comprobarLogin($usuario, $contrasena){
    $usuContra=[
    "Marina"=>"1234",
    "Ezequiel"=>"4321",
    "Carol"=>"3333"
];
  foreach ($usuContra as $user => $pass) {

        if ($usuario === $user) {
            if ($contrasena === $pass) {
                return "Usuario y contraseña válidos";
            } else {
                return "Contraseña incorrecta";
            }
        }
    }

    return "Usuario no válido";
}

?>

