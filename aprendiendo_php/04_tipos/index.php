<?php

/*
TIPOS DE DATOS:
Entero (int/integer) = 99
Como flotante / decimales (float/double) = 3.45
Cadenas (string) = "Hola yo soy un string"
Boleano (bool) = 1 0 -- true false
null
Array (coleccion de datos)
Objetos

*/ 

$numero = 16;

echo gettype($numero);
echo "<br/>";


$decimal = 27.8;

echo gettype($decimal);
echo "<br/>";

$texto = "Soy un texto";
$verdadero = true;
$nula = null;


//Debugear

$mi_nombre ="Javier Candela";

var_dump($mi_nombre);
echo "<br/>";

$texto = "Soy un texto $mi_nombre";
echo "$texto";
echo "<br/>";


//Constantes
// Es un contenedor de informacion que no puede variar

define('nombre', 'Javier Candela');
define('web', 'www.javier.es');


echo '<h1>'.nombre.'</h1>';


//Constantes Predefinidas

echo PHP_OS;  // Muestra el sistema operativo
echo "<br/>";
echo __LINE__;


?>