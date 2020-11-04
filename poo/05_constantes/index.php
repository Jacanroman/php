<?php

class Usuario{

    //las constantes son estaticas
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;


    function getEmail(){
        return $this->email;
    }

    function getPassword(){
        return $this->password;
    }

    function setEmail($email){
        return $this->email = $email;
    }

    function setPassword($password){
        return $this->password = $password;
    }
}

$usuario = new Usuario();

//para ver las propiedades estaticas
echo $usuario::URL_COMPLETA;



var_dump($usuario);