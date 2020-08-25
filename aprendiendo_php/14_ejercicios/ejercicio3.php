<?php

/*
Ejercicio 3, programa que compruebe si una variable esta vacia y si
esta vacia rellenarla con texto en minuscula y mostrarlo en mayusculas 
y negrita
*/

$texto = "";

if(empty($texto)){
    $texto = "hola yo soy el relleno";
    $textoMA = strtoupper($texto);

    echo "<strong>$textoMA</strong>";
}else{
    echo "la variable tiene este contenido dentro: ".$texto;
}


?>