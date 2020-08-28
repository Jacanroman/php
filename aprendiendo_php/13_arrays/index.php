<?php

/*
ARRAYS 
Una array es una coleccion o un conjunto de datos/valores
bajo un unico nombre.
Para acceder a esos valores usamos un indice numerico o alfanumerico
*/


$peliculas = array('Batman','Spiderman','El señor de los anillos');
$cantantes = ['2pac','Drake','Jennifer Lopez'];


//var_dump($peliculas);
//var_dump($cantantes);

echo $peliculas[0];
echo '<br/>';
echo $cantantes[1];
echo '<hr />';


// Recorre con For

echo "<h1>Listado de peliculas</h1>";
echo "<ul>";

for($i=0; $i < count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";
echo '<hr />';


//Recorres con Foreach

echo "<h1>Listado de peliculas</h1>";
echo "<ul>";

foreach($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}

echo "</ul>";
echo '<hr />';

//Arrays asociativos

$personas = array(
    'nombre' => 'Javier',
    'apellidos' => 'Candela',
    'web' => 'Javiercandela.com'
);

var_dump($personas);
echo "<br/>";
echo $personas['apellidos'];
echo '<hr/>';

//Arrays Multidimensionales

$contactos = array(
    array(
        'nombre' => 'Pedro',
        'email' => 'pedro@pedro.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Salva',
        'email' => 'Salva@salva.com'
    ),

);

var_dump($contactos);
echo "<br/>";

echo $contactos[1]['nombre'];
echo "<br/>";
foreach($contactos as $key =>$contacto){
    var_dump($contacto['nombre']);
}
echo '<hr/>';





?>