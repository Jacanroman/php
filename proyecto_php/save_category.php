<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;

    //Array de errores

    $errores = array();

    //Validar los datos antes de guardarlos en la base de datos
    //validar el campo nombre

    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $validate_name = true;
    }else{
        $validate_name = false;
        $errores['name'] = "the name is incorrect";
    }


    if(count($errores)==0){
        $sql = "INSERT INTO categorias VALUES(NULL,'$name');";
        $save = mysqli_query($db, $sql);
    }

}

header('Location:index.php');