<!DOCTYPE html> <html lang=”es”>
<head> <title>Saludo</title>
</head> <body>
<?php echo "<p>Bienvenido/a, ", $_POST["nombre"], "(", $_POST["correo"], ").</p>";
var_dump($_POST)
?> </body>
</html>