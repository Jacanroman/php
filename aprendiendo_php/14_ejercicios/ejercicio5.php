<?php

/*
Crear un array con el contenido de la tabla:
ACCION AVENTURA                 DEPORTES    
GTA     ASSASINS                FIFA 19
COD     CRASH                   MOTO GP 19
PUG     PRINCE OF PERSIA        PES 19
*/




$tabla = array(
    "ACCION" => array("GTA 5", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assasins Creed", "Crash Bandicoot","Princes of persia"),
    "DEPORTES" => array("Fifa19","PES 19","MotoGp 19")
);

$categorias = array_keys($tabla);


?>


<table border="1">
    <?php require_once 'ejercicio5/encabezado.php'; ?>
    <?php require_once 'ejercicio5/primera.php'; ?>
    <?php require_once 'ejercicio5/segunda.php'; ?>
    <?php require_once 'ejercicio5/tercera.php'; ?>
    
    
   
</table>