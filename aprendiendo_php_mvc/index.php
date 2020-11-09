<h1>Bienvenido a mi web MVC</h1>
<?php


     /*con requires normales
    require_once 'controllers/UsuarioController.php';
    require_once 'controllers/NotaController.php';
    */

    //con autoload mejor

    require_once 'autoload.php';



    //dinamicamente

    if(isset($_GET['controller'])){
        $nombre_controlador = $_GET['controller'].'Controller';
        //var_dump($nombre_controlador);  
    }else{
        echo "La pagina que buscas no existe";
        exit();
    }
    

if(class_exists($nombre_controlador)){

    
    $controlador = new $nombre_controlador();
    
    if(isset($_GET['action']) && method_exists($controlador,$_GET['action'] )){
        $action = $_GET['action'];
        
        $controlador->$action();
    }else{
        echo "La pagina que buscas no existe 1";
    }
}else{
        echo "La pagina que buscas no existe 2";
}





//estaticamente
    //$controlador = new UsuarioController();

    //con esto lo hacemos dinamico
