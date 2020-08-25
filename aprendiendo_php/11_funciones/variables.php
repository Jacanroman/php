<?php

/*
Variables locales:
Son las que se definen dentro de una funcion y no pueden ser usadas
fuera de la funcion solo estan disponibles dentro. A no ser que hagamos return.

Variables globales: Son las que se declaran fuera de una funcion y estan
disponibles dentro y fuera de las funciones
*/


// Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase; // para decir que esto es una variable global

    echo "<h1>$frase</h1>";

    //Variable local
    $year = 2020;
    echo "<h1>$year</h1>";
}

holaMundo();
echo "<br/>";
echo "<hr/>";

// Funciones Variables

function buenasDias(){
    return "Hola Buenos dias ";
}

function buenasTardes(){
    return "Hey que tal ha ido la comida?";
}

function buenasNoches(){
    return "¿te vas a dormir ya?";
}


$horario = $_GET['horario'];
$miFuncion = "buenas".$horario;

echo $miFuncion();


?>