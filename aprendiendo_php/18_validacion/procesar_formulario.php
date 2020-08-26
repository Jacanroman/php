<?php

$error = 'faltan valores';

if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && 
    !empty($_POST['edad']) && !empty($_POST['email']) &&
    !empty($_POST['pass'])){
        $error = 'ok';

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }else{
       $error = 'faltan valores';

       $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
       header("Location:index.php?error=$error&nombre=$pass"); 
    }

?>




<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formularios </title>
    </head>

    <body>
    </body>
</html>