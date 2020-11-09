<?php

session_start();

require_once 'autoload.php';
//cargamos la base de datos
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

//cargamos los helpers
require_once 'helpers/utils.php';


function show_error(){
    $error = new errorController();
    $error->index();
}

//compruebo que el controlador llegue por la URL
if(isset($_GET['controller'])){
    //Si me llega creo esta variable
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = controller_default;
}else{
    //Si no paro la ejecucion
    show_error();
    exit();
}

//compruebo si existe el controlador(clase)
if(class_exists($nombre_controlador)){
    // creo el objeto de la clase
    $controlador = new $nombre_controlador();

    //compruebo si me llega la accion y si el metodo existe dentro del controlador
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        //invocamos al metodo
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controlador->$action_default();

    }else{
       show_error();
    }

}else{
    show_error();
}


require_once 'views/layout/footer.php';
