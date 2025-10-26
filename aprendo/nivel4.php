<?php
/*Define un nombre de usuario y una contraseña.
Si ambos son correctos (por ejemplo marina y php123) → “Bienvenida, Marina 💖”
Si el usuario está bien pero la contraseña no → “Contraseña incorrecta ❌”
Si el usuario no existe → “No te conozco 🤔”*/
$usuario = "Marina";
$contraseña = "php123";

if($usuario == "Marina" && $contraseña == "php123"){
    echo "Bienvenida $usuario";
}elseif($usuario == "Marina" && $contraseña != "php123"){
    echo "Contraseña incorrecta";
}else{
    echo "No te conozco";
}

?>