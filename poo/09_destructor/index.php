<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Javier Candela";
        $this->email = "javi@javi.com";
        echo "Creando del objeto creada <br/>";
    }

    public function __toString(){
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }

    public function __destruct(){
        echo "<br/> Destruyendo el objeto";
    }
}


$usuario = new Usuario();
echo $usuario;
echo $usuario->email;

/*
for($i=0; $i<=200; $i++){
    echo $i."<br/>";
}
*/

