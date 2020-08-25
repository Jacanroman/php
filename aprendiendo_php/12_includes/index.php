<?php
 //include 'cabecera.php'
 require 'cabecera.php'
 /*
 La diferencia entre require e include
 es que con include la ejecucion de la pagina sigue
 y con require se para la ejecucion */
?>

    <!--Contenido -->
    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la pagina de inicio </p>
        
    </div>
    <?php var_dump($nombre); ?>
    <hr />

<?php include 'footer.php'; ?>
</body>
</html>