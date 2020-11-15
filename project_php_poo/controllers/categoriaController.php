<?php

require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
    
    public function index(){
         //utilizo el metodo isAdmin dentro de helpers/utils.php
         Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();


        require_once 'views/categoria/index.php';
    }

    public function ver(){

        if(isset($_GET['id'])){
            
            $id = $_GET['id'];

            // conseguimos la categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            //Conseguir productos
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos=$producto->getAllCategory();
            
        }
        
        //cargamos la vista
        require_once 'views/categoria/ver.php';
    }

    public function crear(){
         //utilizo el metodo isAdmin dentro de helpers/utils.php
         Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save(){
        //utilizo el metodo isAdmin dentro de helpers/utils.php
        Utils::isAdmin();

        //Guardar la categoria en la bd
        if(isset($_POST) && isset($_POST['nombre'])){
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
        }

        header('Location:'.base_url."categoria/index");

    }
}