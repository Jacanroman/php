<?php

require_once 'coche.php';

$coche = new Coche("yellow","Renault","Clio",150,200,5);
$coche1 = new Coche("green","Seat","Ibiza",100,250,5);
$coche2 = new Coche("red","Renault","Clio",150,200,4);
$coche3 = new Coche("blue","Mercedes","benz",250,200,5);


//var_dump($coche);

$coche ->color= "pink";
$coche ->setBrand("Audi");
//$coche->getModel();

echo $coche->showInfo($coche1);


//var_dump($coche);