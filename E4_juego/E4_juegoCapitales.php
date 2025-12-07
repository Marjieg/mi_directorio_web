<?php 
include "./E4_relacionPaisesEU.php";

// Crear listas separadas
$paises = array_keys($EU);
$capitales = array_values($EU);

// Mezclarlas
shuffle($paises);
shuffle($capitales);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="E4_comprobarCapital.php" method="POST">
        <fieldset>
            <legend>SELECCIONA PAIS</legend>
        <select name="pais">
            <?php foreach($paises as $pais): //creo esta etiqueta de php foreach ?> 
                <option value="<?= $pais ?>"><?= $pais ?></option>
            <?php endforeach; ?>
        </select>
        </fieldset>

        <fieldset>
            <legend>SELECCIONA CAPITAL<legend>
        <select name="capital">
            <?php foreach($capitales as $capital): ?>
                <option value="<?= $capital ?>"><?= $capital ?></option>
            <?php endforeach; ?>
            </select>
        </fieldset>
        <input type="submit" value="COMPROBAR">
</form>
    
</body>
</html>