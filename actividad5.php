<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
//Escribe un script PHP que tome el día de la semana del sistema y genere como salida el texto
//  “Hoy es “, seguido del día de la semana en español, usando la estructura switch.
$dia = date("6");

switch ($dia){
    case "1";
    echo "Hoy es lunes";
    break;
    case "2";
    echo "Hoy es martes";
    break;
    case "3";
    echo "Hoy es miércoles";
    break;
    case "4";
    echo "Hoy es jueves";
    break;
    case "5";
    echo "Hoy es viernes";
    break;
    case "6";
    echo "hoy es sábado";
    break;
    case "7";
    echo "hoy es domingo";
    default;
    echo "valor erroneo";
}

?>

</body>
</html>