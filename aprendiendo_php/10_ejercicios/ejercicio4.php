<?php

/*Ejercicio 4
Recoger dos numeros por la URL(GET) Y HACER
TODAS LAS OPERACIONES basicas de una calculadora suma
resta multiplicacion y division de esos dos numeros */

var_dump($_GET);
if (isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "<br/>";
echo "Calculadora <br/>";

echo "Suma: ".($numero1+$numero2)."<br/>";
echo "Resta: ".($numero1-$numero2)."<br/>";
echo "Multiplicacion: ".($numero1*$numero2)."<br/>";
echo "Division: ".($numero1/$numero2)."<br/>";

}else{
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}



?>