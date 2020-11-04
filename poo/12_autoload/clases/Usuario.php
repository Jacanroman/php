<?php

namespace MisClases;

class Usuario {
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "javier Candela";
        $this->email = "javier@javier.com";
    }
}