<?php 



if(isset($_POST)){

    require_once 'includes/conexion.php';
    
    if(!isset($_SESSION)){
        session_start();
    }

    //var_dump($_POST);

    //vemos si existe la variable nombre
    /*
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
    }else{
        $nombre = false;
    }
    */

    //vemos si existe la variable nombre (con operacion ternario)
    // recogemos los valores del formulario de registro
    //con mysqli_real_escape hacemos que podamos introduir ' en los nombres

    $name = isset($_POST['name']) ? mysqli_real_escape_string($db,$_POST['name']) : false;
    $surname = isset($_POST['surname']) ?  mysqli_real_escape_string($db,$_POST['surname']): false;
    $email = isset($_POST['email']) ?  mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ?  mysqli_real_escape_string($db,$_POST['password']) : false;
    

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

    if(!empty($password)){
        $validate_password = true;
    }else{
        $validate_password = false;
        $errores['password'] = "the password is incorrect";
    }


    //comprobar si hay errores

    var_dump($errores);

    $save_user = false;




    if(count($errores)== 0){
        $save_user = true;
        
        //CIFRAR THE PASSWORD
        $password_secure = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
        
        // INSERT USER IN THE DATABASE
        $sql = "INSERT INTO usuarios VALUES(null,'$name','$surname','$email','$password_secure',CURDATE());";
        $query = mysqli_query($db,$sql);


        //var_dump(mysqli_error($db));
        //die();

        if($query){
            $_SESSION['finish']= "the insertion was sucess";
        }else{
            $_SESSION['errores']['general'] = "fallo al guardar el usuario";
        }
    
    }else{
        $_SESSION['errores'] = $errores;
        header('Location:index.php');
    }

    
}

header('Location:index.php');
