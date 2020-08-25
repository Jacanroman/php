<?php

/* BUCLE WHILE
 Estructura de control que itera o repite la ejecucion de una 
serie de instrucciones tantas veces como sea necesario, en base una
condicion que le bucle tiene 

while(condicion){
    bloque de instrucciones
    otra instruccion
}

*/

$numero = 0;
while($numero <=100){
    echo $numero;
    // para quitar la coma despues del 100
    if($numero !=100){
        echo ", ";
    }
    $numero++;
}

echo"<br/>";
echo"<hr/>";

//Ejemplo 1

if(isset($_GET['numero'])){
    //cambiamos tipo de dato
    $numero = (int) $_GET['numero']; // castear de string a int
}else{
    $numero = 1;
}

echo "<h1> Tabla de multiplicar del numero $numero </h1>";

$contador = 0;

while($contador <=10){
    echo "$numero x $contador = ".($numero*$contador)."<br />";
    $contador++;
}
echo"<br/>";
echo"<hr/>";

// DO WHILE 
/*
do{
    // BLOQUE DE INSTRUCCIONS
}while(condicion);
*/

$edad = 18;
$contador = 1;

do{
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
}while($edad >=18 && $contador <=10);



?>