<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function datos($nombre,$anionacimiento,$lugarnacimiento) {
    echo "$nombre nació en $lugarnacimiento en el $anionacimiento <br>";

}

$persona1 = ("Alejandro");
$anionacimiento1 = 2004;
$lugarnacimiento1 = ('Madrid');
datos($persona1,$anionacimiento1,$lugarnacimiento1);

$persona2 =("Patricia");
$anionacimiento2 = 2004;
$lugarnacimiento2 = ('Valencia');
datos($persona2,$anionacimiento2,$lugarnacimiento2);
?>
</body>
</html>