<?php
    session_start();

        echo "<div> Nombre; ", $_SESSION["nombre"], "</div>";
        echo "<div> Apellidos; ", $_SESSION["apellidos"], "</div>";
?>