<?php

class Coche{

    //Atributos o propiedades (variables)

    //podemos acceder desde cualquier lugar, dentro de la clase actual
    //dentro de clases que hereden esta clase o fuera de la clase
    public $color;

    /*PROTECTED: Podemos acceder desde la clase que los define y desde
    las clases que hereden esta clase */
    protected $brand;

    /*PRIVATE: unicamente se puede acceder desde esta clase */
    private $model;

    public $speed;
    public $power;
    public $places;


    public function __construct($color, $brand, $model, $speed,$power,$places){
        $this->color = $color;
        $this->brand = $brand;
        $this->model =$model;
        $this->speed = $speed;
        $this->power = $power;
        $this->places = $places;
    }

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

    public function setBrand($brand){
        $this->brand= $brand;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function getModel(){
        return $this->model;
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

    //le decimos que le objeto tiene que ser de tipo Coche
    public function showInfo(Coche $myOboject){

        if(is_object($myOboject)){
            $info = "<h1>Information of the car</h1>";
            $info .= "Color: ".$myOboject->color;
            $info .= "<br/>Model: ".$myOboject->model;
            $info .= "<br/>Speed: ".$myOboject->speed;
        }else{
            $info = "Your data is: $myOboject";
        }
        return $info;
    }


}   //fin definicion de la clase