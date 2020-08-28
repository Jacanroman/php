<?php

/*
FUNCIONES: 
Una funcion es un conjunto de instrucciones agrupadas bajo un nombre
concreto y que pueden reutilizarse solamente invocando a la funcion
tantas veces como queramos


function nombreDeMiFuncion ($parametro){
    //Bloque / Conjunto de instrucciones
}
*/

//Ejemplo 1

function muestraNombres(){
    echo "Javier Candela <br />";
    echo "Maria <br />";
    echo "Stamatia <br />";
    echo "juan <br />";
    echo "<hr />";
}


/*Invocar funcion
muestraNombres();
*/

//Ejemplo 2

function tabla($numero){
    echo "<h3>Tabla de multiplicar del numero: $numero </h3>";
    for($i=1; $i<=10;$i++){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br />";
    }
    echo "<hr />";
}

tabla(55);
    if(isset($_GET['numero'])){
    tabla($_GET['numero']);
    }else{
        echo "No hay numero para sacar la tabla";
    }


// Ejemplo 3

function calculadora($numero1,$numero2, $negrita = false){
    //Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;


    $cadena_texto = "";

    if($negrita !=false){
        echo"<h1>";
    }

    echo "Suma: $suma <br/>";
    echo "Resta: $resta <br/>";
    echo "Multiplicacion: $multiplicacion <br/>";
    echo "Division: $division <br/>";

    if($negrita !=false){
        echo"</h1>";
    }

    echo "<hr />";
}


calculadora(10,30);
calculadora(1,2,true);
calculadora(1,3);

// Ejemplo 4

function devuelveElNombre($nombre){
    return "El nombre es: $nombre";
}

echo devuelveElNombre("javier Candela");
echo "<br/>";
echo "<hr />";


//Ejemplo 5

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre1($nombre,$apellidos){
    $texto = getNombre($nombre)
        ."<br/>".
         getApellidos($apellidos);
        
    return $texto;
}

echo devuelveElNombre1("javier","Candela");

?>