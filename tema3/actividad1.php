<!DOCTYPE html> <html lang=”es”>
<head> <title>Saludo</title>
</head> <body>
<?php echo "<p>Bienvenido/a, ", $_GET["nombre"], "(", $_GET["correo"], ").</p>";
var_dump($_GET)
?> </body>
</html>