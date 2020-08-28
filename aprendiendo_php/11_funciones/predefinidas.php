<?php

//Debuggear
$nombre = "Javier Candela";
var_dump($nombre);
echo "<hr/>";

//Fechas
echo date('d-m-Y');
echo "<hr/>";
echo time();
echo "<hr/>";

//Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10);
echo "<hr/>";

echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<hr/>";

echo "El numero pi: ".pi();
echo "<hr/>";

echo "Redondear: ".round(7.788998007,2);
echo "<hr/>";

echo gettype($nombre);
echo "<hr/>";

// COMPROBAR EL TIPO DE VARIABLES

if(is_string($nombre)){
    echo "Esa variable es un string";
}
echo "<hr/>";

if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}
echo "<hr/>";


// para ver si existe una variable

if(isset($edad)){
    echo "La variable existe";
}else{
    echo "la variable no existe";
}
echo "<hr/>";

// trim() limpia el contenido por delante y detras

$frase = "        mi contenido      ";
var_dump($frase);
echo "<br />";
var_dump(trim($frase));
echo "<hr/>";

// Eliminar variables / indices de arrays

$year = 2020;

unset($year);
var_dump($year);
echo "<hr/>";

//Comprobar si esta vacio
$texto = " S";

if(empty($texto)){
    echo "la variable de texto esta vacia";
}else{
    echo "La variable texto TIENE CONTENIDO";
}
echo "<hr/>";

// Contar caracteres de una cadena
$cadena = "12345";

echo strlen("$cadena");


echo "<hr/>";

// Encontrar caracter o palabar

$frase = "la vida es bella";
echo strpos($frase, "ida");

echo"<hr/>";

// Reemplazar palabra 

$frase = str_replace("vida","moto",$frase);
echo $frase;
echo "<hr/>";

//Convertir MAYUSCULAS Y MINUSCULAS

echo strtolower($frase);
echo "<br />";
echo strtoupper($frase);
echo "<hr/>";

?>