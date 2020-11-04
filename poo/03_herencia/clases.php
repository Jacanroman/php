<?php

// HERENCIA: la posibilidad de compartir atributos y metodos entre clases


class Person{

    public $name;
    public $surname;
    public $height;
    public $age;


    public function getName(){
        $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getSurName(){
        $this->surname;
    }

    public function setSurName($surname){
        $this->surname=$surname;
    }

    public function getHeight(){
        $this->height;
    }

    public function setHeight($height){
        $this->height=$height;
    }

    public function getAge(){
        $this->age;
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function speak(){
        return "I am speaking";
    }

    public function walk(){
        return "I am walking";
    }


}


//Al poner extends cogemos todos las propiedades y metodos 
// de la clase Person

class Engineer extends Person{

    public $languages;
    public $experience;

    public function __construct(){
        $this->languages = "HTML, CSS Y JS";
        $this->experience = 10;
    }

    public function knowLanguages($languages){
        $this->languages = $languages;

        return $this->languages;
    }

    public function develop(){
        return "I am developer";
    }

    public function fixComputer(){
        return "Fix Computer";
    }

    public function Office(){
        return "I am using word";
    }

}


class Technician extends Engineer{
    public $auditarRedes;


    public function __construct(){
        //esto es para heredar el constructor del padre
        parent::__construct();


        $this->auditarRedes = 'experto';
    }

    public function auditoria(){
        return "Estoy auditando una red";
    }
}