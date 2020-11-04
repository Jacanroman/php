<?php

//si el usuario no esta identificado te redirige a la 
// pagina de incio

// SI NO EXISTE LA SESSIOIN LA CREAMOS
if(!isset($_SESSION)){
    session_start();
}


if(!isset($_SESSION['user'])){
    header('Location: index.php');
}