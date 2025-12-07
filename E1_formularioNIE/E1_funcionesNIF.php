<?php

function calculaLetraDeNif($numero){
    $arrayLetra= ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z",
"S","Q","V","H","L","C","K","E"];
    $indice = $numero % 23; //el resto e dividir por 23
    return $arrayLetra[$indice];
}

function verificadorNIF($NIF){
    //hay que separar el número y la letra
    $numero = substr($NIF, 0, -1);  //todo menos el último caracter
    $letraIntroducida = strtoupper(substr($NIF, -1)); //última letra
    //comprobar que el número es realmente número
    //obtneer letra correcta
    $letraCorrecta = calculaLetraDeNif($numero);
    //comprobar si coinciden
    if ($letraIntroducida === $letraCorrecta){
        echo "el NIF introducido es correcto";
    }else{
        echo "el NIF introducido no es correcto";
    }
}


?>