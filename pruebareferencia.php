<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  //calcularia el triple de un numero pero no imprimiria nada si no se lo pasamos por referencia
       function triple(&$numero) {
          $numero *= 3; 
       }
       $num = 2; 
       triple($num); 
       echo $num;
        //paso por referencia la propia función 
       // puede modificar los valores de las variables que le han sido enviadas
       // Para indicar que un parámetro se pasa por referencia, 
       // se añade el carácter & delante del parámetro en la cabecera de la declaración de la función.
    ?>
    
</body>

</html>
