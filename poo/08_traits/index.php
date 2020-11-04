<?php

//trait nos permite definir metodos para compartir entre diferentes clases

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}

class Coche{
    //propiedades
    public $nombre;
    public $marca;

    //al poner use le decimos que queremos usar el trait en
    // este caso el trait Utilidades
    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
}

$coche = new Coche();
$persona = new Persona();
$videojuegos = new VideoJuego();

$coche->nombre= "Ferrari";

$coche->mostrarNombre();


$persona->nombre = "juan";
$persona->mostrarNombre();



