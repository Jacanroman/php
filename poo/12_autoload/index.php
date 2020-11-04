<?php


// AUTOLOAD

require_once 'autoload.php';
/*
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';


$usuario = new Usuario();
echo $usuario->nombre;
echo "<br/>";
echo $usuario->email;
*/


//ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;

//Utilizamos el alias cuando un nombre de un objeto coincide
//con otro objeto que estamos utilizando antes
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
}


//OBJETO PRINCIPAL
$principal = new Principal();
//var_dump($principal->usuario);
var_dump(get_class_methods($principal));


//OBJETO DE OTRO PAQUETE
$usuario = new UsuarioAdmin();
var_dump($usuario);


//COMPROBAR SI EXISTE UNA CLASE

$clase = class_exists('MisClases\Usuario');
if($clase){
    echo "<h1>La clase Si existe</h1>";
}else{
    echo "<h1>La clase No existe</h1>";
}