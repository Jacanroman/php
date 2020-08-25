<?php

/*
Crear un Script en PHP que tenga 
4 variables una de tipo string, un array, otra booleana,
*/

$array = [2,3,4,5,6];
$texto = "me llamo javier";
$numero = 23;
$verdadero = true;

if(is_array($array)){
    echo"<h1> El $array es un array</h1>"; 
}

if(is_string($texto)){
    echo"<h1> El $texto es un texto</h1>";
}

if(is_numeric($numero)){
    echo"<h1> El $numero es un numero</h1>";
}

if(is_bool($verdadero)){
    echo"<h1> El $verdadero es un Booleano</h1>";
}


?>