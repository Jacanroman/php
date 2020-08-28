<?php

/*
//CONDICIONALES
IF:
if(condicion){
    instrucciones
}else{
    otras instrucciones
}


// OPERACIONES DE COMPARACION

== IGUAL
=== IDENTICO
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

// OPERADORES LOGICOS
&& and
|| or
! no
and, or con texto

*/


// Ejemplo 1
$color = "rojo";

if($color == "rojo"){
    echo "EL COLOR ES ROJO";
}else{
    echo "EL CLOR NO ES ROJO";
}

echo"<br/>";



//Ejemplo 2
$year = 2020;

if($year < 2020){
    echo "Estamos antes de  2020";
}else{
    echo "estamos despues de 2020";
}

echo"<br/>";


//Ejemplo 3
$nombre = "Javier Candela";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 49;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad </h1>";
    if($continente == "Europa"){
        echo "<h2> y es de $ciudad</h2>";
    }else{
        echo "<h2>no es de europa</h2>";
    }
}else{
    echo "<h2>$nombre no es mayor de edad </h2>";
}
echo"<br/>";

//Ejemplo 4

$dia = 2;

if($dia ==1){
    echo "Lunes";
}elseif($dia==2){
    echo "Martes";
}elseif($dia==3){
    echo "Miercoles";
}elseif($dia==4){
    echo "Jueves";
}elseif($dia==5){
    echo "Viernes";
}else{
    echo "Fin de semana";
}
echo"<br/>";
echo"<hr/>";

//Ejemplo 5

$edad1= 18;
$edad2= 64;
$edad_oficial = 17;

if($edad_oficial >= $edad1 && $edad_oficial<= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "No puede trabajar";
}
echo"<br/>";
echo"<hr/>";


//Ejemplo 6
$pais = "Mexico";

if($pais == "Mexico" || $pais == "España" || $pais =="Colombia"){
    echo "Se habla español";
}else{
    echo "No se habla español";
}
echo"<br/>";
echo"<hr/>";

//Ejemplo 7

$dia1 = 44;

switch($dia1){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de Semana";
}

echo"<br/>";
echo"<hr/>";


//Ejemplo 8

goto marca;

echo "<h3>Instruccion 1 </h3>";
echo "<h3>Instruccion 2 </h3>";
echo "<h3>Instruccion 3 </h3>";
echo "<h3>Instruccion 4 </h3>";

marca:
echo "Me he saltado 4 echos"





?>