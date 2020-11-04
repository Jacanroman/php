<?php

class Persona{

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    
    public function __call($name, $arguments){
        $prefix_metodo = substr($name,0,3);
        //return $prefix_metodo;

        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name),3);

            if(!isset($this->$nombre_metodo)){
                return "el metodo no existe";
            }

            //es como hicieramos $this->nombre
            return $this->$nombre_metodo;
        }else{
            return "el metodo no existe";
        }

    }
    
}


$persona = new Persona("Javier",66,"Murcia");

echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
echo $persona->getHola();