<?php

interface Ordenador{

    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{

    private $modelo;

    function getModelo(){
        return $this->modelo;
    }

    
    function setModelo($modelo){
        return $this->modelo= $modelo;
    }
    
    /**
     los metodos abstractos que hay en Ordenador 
        hay que declararlos aqui porque si no 
        no funciona.
     */
    public function encender(){

    }

    public function apagar(){

    }

    public function reiniciar(){

    }

    public function desfragmentar(){

    }

    public function detectarUSB(){

    }
}


$mac = new iMac();

var_dump($mac);

$mac->setModelo('Macbokk PRO');
echo $mac->getModelo();