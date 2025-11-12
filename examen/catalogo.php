<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'almacen.php'; //he hecho esto para llamar al contenido del archivo almacen.php y poderlo usar aquí
include 'datosTienda.php'; //con esto he hecho lo mismo


echo"<<---------------------NOMBRE-------------------->><br>";
echo "DATE UN CAPRICHO";
echo "<h3>JUEGOS</h3><br>";
foreach($juegos_01 as $key_01=>$valor_01){
    echo "$key_01--------- ";
    echo "$valor_01 <br>";
}
echo  "<h3>COMICS</h3><br>";
foreach($comics_01 as $key_01=>$valor_01){
    echo "$key_01---------";
    echo "$valor_01 <br>";
}
echo "<h3>NOVELAS</h3><br>";
foreach($novelas_01 as $key_01=>$valor_01){
    echo "$key_01---------";
    echo "$valor_01 <br>";
}



    ?>
    
</body>
</html>