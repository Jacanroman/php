<?php

class NotaController{

    public function listar(){
        //Cargo el Modelo
        require_once 'models/nota.php';

        //logica accion del controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');

        //Vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        //Cargo el Modelo
        require_once 'models/nota.php';

        $nota = new Nota();

        $nota->setUsuario_id(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("descripcion de mi nota php");

        $guardar = $nota->guardar();

        //echo $nota->db->error;
        //die();
        header("Location: index.php?controller=Nota&action=listar");
    }

    public function borrar(){
        
    }
}