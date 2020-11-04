<?php

//vemos si llega info por post
if(isset($_POST)){

    require_once 'includes/conexion.php';

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false; 
    $description = isset($_POST['description']) ? mysqli_real_escape_string($db, $_POST['description']) : false; 
    $category = isset($_POST['category']) ? (int)$_POST['category']: false; 
    $user = $_SESSION['user']['id'];

//validacion

    $errores = array();

    if(empty($name)){
        $errores['name'] = "The name is not valid";
    }

    if(empty($description)){
        $errores['description'] = "The description is not valid";
    }

    if(empty($category) && !is_numeric($category)){
        $errores['category'] = "The category is not valid";
    }


    if(count($errores)==0){
        //condicion para ver si es insertar o actualizar
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['user']['id'];

            $sql = "UPDATE entradas SET titulo='$name', descripcion='$description', categoria_id=$category". 
                    " WHERE id= $entrada_id AND usuario_id= $usuario_id";
        }else{
            $sql = "INSERT INTO entradas VALUES(null, $user, $category, '$name', '$description', CURDATE());";
        }
        
        $save = mysqli_query($db, $sql);

        /*
        echo mysqli_error($db);
        die();
        */

        //var_dump(mysqli_error());
        //die();
        header('Location: index.php');
    }else{
        $_SESSION['errores_entry'] = $errores;
        if(isset($_GET['editar'])){
            header('Location: update_entry.php?id='.$_GET['editar']);
        }else{
            header('Location: new_entry.php');
        }
       
    }

}

