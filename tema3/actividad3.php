<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre= $_POST["nombre"];
$profesion= $_POST["profesion"];
echo "nombre ",$nombre,"<br>";
foreach($profesion as $valor){
    echo $valor"<br>";
}


    ?>
</body>
</html>