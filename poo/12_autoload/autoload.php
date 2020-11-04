<?php
 /*
function autocargar_clases($class){
    require_once 'clases/' . $class . '.php';
}


spl_autoload_register('autocargar_clases');
*/


function app_autoloader($class){

    $class_rep = str_replace('\\', '/', $class);
    
    require_once 'clases/' . $class_rep . '.php';
    
    }


spl_autoload_register('app_autoloader');