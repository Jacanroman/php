<?php

/*
Ejercicio 1. Hacer un programa en PHP que tenga un array con 8
numeros enteros y que haga lo siguiente:
- Recorrerlo y mostralo
- Ordenarlo y mostrarlo
-Mostrar sus longitud
- Mostrar algun elemento
*/

//Funciones 

function mostrarArray($numeros){
    $resultado = "";

    foreach($numeros as $numero){
        // $resultado = $resulatdo.$numero."<br/>";
        $resultado .= $numero."<br/>"; 
     }

     return $resultado;
}



$numeros = [1,3,5,8,4,3,0,8];

echo "<h1>Recorrer y mostrar</h1>";

/*
foreach($numeros as $numero){
   echo $numero."<br/>"; 
}
echo "<hr/>";
*/
echo mostrarArray($numeros);



//Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostrar</h1>";

sort($numeros);
echo mostrarArray($numeros);
echo "<hr/>";


//Motrar su longitud
echo "<h1>Numero total de elemento</h1>";
echo count($numeros);
echo "<hr/>";

//Busqueda en el array
$busqueda = 8;
echo "<h1>Busqueda en el array el numero $busqueda</h1>";

$search = array_search($busqueda,$numeros);
var_dump($search);

if(!is_bool($search)){
    echo"<h3>El numero buscado si esta el array</h3>";
}else{
    echo"<h3>El numero buscado no esta en el array</h3>";
}
echo "<hr/>";



?>