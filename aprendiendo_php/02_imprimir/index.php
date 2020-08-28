<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>
<body>
    <h1>Master en PHP </h1>
    
    <?="bienvenido al curos de PHP"
    // esto es un atajo para hacer un <?php echo"lo que se" '> ?>

    <?php
        // se usa . para concatenar 

        echo "<h3> Listado de Videojuegos: </h3>";
        echo "<ul>"
            . "<li>GTA</li>"
            . "<li>Fifa</li>"
            . "<li>Mario Bros</li>"

            . "</ul>";

        echo '<p>Esta es toda'.' - '.'lista de juegos </p>';

    ?>
    
</body>
</html>