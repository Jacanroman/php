<?php

class Categoria{
    //propiedades privadas porque solo podemos acceder a ellas
    //mediante metodos
    private $id;
    private $nombre;
    private $db;

    //conectamos a la base de datos con el constructor
    public function __construct(){
        $this->db = Database::connect();
    }

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias");

        return $categorias;
    }

}