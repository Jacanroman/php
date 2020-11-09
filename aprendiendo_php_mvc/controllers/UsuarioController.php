<?php

class UsuarioController {

    public function mostrarTodos(){
        //cargamos el modelo
        require_once 'models/usuario.php';


        //ejecutamos la logica que queramos del modelo cargado
        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');


        //llamamos a la vista donde esta disponible todo lo anterior
        require_once 'views/usuarios/mostrar_todos.php';
    }


    public function crear(){
        require_once 'views/usuarios/crear.php';
        
    }
}