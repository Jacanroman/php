<?php

    //incluye cada uno de los controladores dentro de la carpeta controller
    function controllers_autoload($classname){
        include 'controllers/' . $classname. '.php';
    }

    spl_autoload_register('controllers_autoload');
    