<?php

if(isset($_POST)){

    require_once 'includes/conexion.php';
    
    //vemos si existe la variable nombre (con operacion ternario)
    // recogemos los valores del formulario de registro
    //con mysqli_real_escape hacemos que podamos introduir ' en los nombres

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db,$_POST['name']) : false;
    $surname = isset($_POST['surname']) ?  mysqli_real_escape_string($db,$_POST['surname']): false;
    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db,trim($_POST['email'])) : false;

    //Array de errores

    $errores = array();

    //validacion de los datos antes de guardarlos en la base de datos
    
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $validate_name = true;
    }else{
        $validate_name = false;
        $errores['name'] = "the name is incorrect";
    }

    if(!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)){
        $validate_surname = true;
    }else{
        $validate_surname = false;
        $errores['surname'] = "the surname is incorrect";
    }

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validate_email = true;
    }else{
        $validate_email = false;
        $errores['email'] = "the email is incorrect";
    }

    
    //comprobar si hay errores

    var_dump($errores);

    $save_user = false;


    if(count($errores)== 0){

        $user = $_SESSION['user'];
        $save_user = true;

        // COMPROBAR SI EL EMAIL YA EXISTE EN LA BASE DE DATOS
        $sql = "SELECT id,email FROM usuarios WHERE email= '$email'";
        $isset_email = mysqli_query($db,$sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        

        
        if($isset_user['id'] == $user['id'] || empty($isset_user)){ 
            // UPDATE USER IN THE DATABASE
            $user = $_SESSION['user'];

            $sql = "UPDATE usuarios SET ".
                "nombre = '$name', ".
                "apellidos = '$surname',". 
                "email = '$email'". 
                "WHERE id = ".$user['id'];


            $query = mysqli_query($db,$sql);


            //var_dump(mysqli_error($db));
            //die();

            if($query){
                $_SESSION['user']['nombre'] = $name;
                $_SESSION['user']['apellidos'] = $surname;
                $_SESSION['user']['email'] = $email;

                $_SESSION['finish']= "Update was sucessful";
                
            }else{
                $_SESSION['errores']['general'] = "It cannot do the Update";
            }

        }else{
            $_SESSION['errores']['general'] = "the user alredy exists";
        }
    
    }else{
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
    }

    
}

header('Location:my_data.php');