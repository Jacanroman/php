<?php

namespace PanelAdministrador;

class Usuario {
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Stamatia";
        $this->email = "Stamatia@javier.com";
    }
}