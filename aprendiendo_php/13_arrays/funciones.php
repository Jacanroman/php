<?php

$cantantes = ['2pac','Drake','Jennifer Lopez','Alfredo'];
$numeros = [1,4,6,2,3,8];

//ordenar orden alfabetico
asort($cantantes);
var_dump($cantantes);
echo "<hr/>";

//ordenar alfabeticamente al reves

arsort($cantantes);
var_dump($cantantes);
echo "<hr/>";

//ordenar numericamente

sort($numeros);
var_dump($numeros);
echo "<hr/>";

//AÑADIR ELEMENTOS A UN ARRAY
$cantantes[] = 'Julio Iglesias';
var_dump($cantantes);
echo "<hr/>";

//otro metodo
array_push($cantantes, 'joaquin sabina');
var_dump($cantantes);
echo "<hr/>";

//Eliminar el ultimo elemento del array
array_pop($cantantes);
var_dump($cantantes);
echo "<hr/>";

//Eliminar un elemento especifico
unset($cantantes[2]);
var_dump($cantantes);
echo "<hr/>";


//Sacar un elemento aleatorio de un array


$indice = array_rand($cantantes);
echo $indice;
echo "<br/>";
echo $cantantes[$indice];
echo '<hr/>';

//Dar la vuelta al array
var_dump(array_reverse($numeros));

echo '<hr/>';

//Buscar dentro de un array

$resultado = array_search('Drake', $cantantes);
var_dump($resultado);
echo '<hr/>';

//Count numero de elementos
echo count($cantantes);


?>