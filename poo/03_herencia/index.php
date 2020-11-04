<?php

require_once 'clases.php';

$person = new Person();
$person->setName("Javier");
var_dump($person);

$engineer = new Engineer();
//$engineer->setName("Javier");

//$engineer->setHeight(1.90);
//$engineer->knowLanguages("HTML, CSS, PHP, JS");
var_dump($engineer);



$tecnico = new Technician();
var_dump($tecnico);