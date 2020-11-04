<?php

//Programacion Orientada a Objectos en PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche{

    //Atributos o propiedades (variables)
    public $color = "red";
    public $model = "Ferrari";
    public $speed = 300;
    public $brand = "Aventador";
    public $power = 500;
    public $places = 2;

    //Tambien se puede hacer asi:
    //public $color, $model, $speed, .... ;

    //Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function speedUp(){
        $this->speed++;
    }

    public function brake(){
        $this->speed--;
    }

    public function getSpeed(){
        return $this->speed;
    }


}   //fin definicion de la clase

//Crear un objeto // Instanciar la clase

$coche = new Coche();

//var_dump($coche);

//Usar los metodos

echo $coche->getSpeed().'<br/>';

$coche->setColor("Yellow");
echo "The color of the car is: ".$coche->getColor().'<br/>';

$coche->speedUp();
$coche->speedUp();
$coche->speedUp();
$coche->speedUp();
$coche->brake();

echo "The speed of the car is: ".$coche->getSpeed().'<br/>';


$coche2= new Coche();

$coche2->setModel("Gallardo");


var_dump($coche);
var_dump($coche2);


?>