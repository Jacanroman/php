<?php

// Iniciar la sesion y la conexion a bd;

require_once 'includes/conexion.php';

//recoger los datos del formulario;
//Comprobamos si existe

if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['password'];


    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email= '$email'";
    $login = mysqli_query($db, $sql);

    //si login existe y nos da solo una fila entonces....
    if($login && mysqli_num_rows($login)==1){
        $user = mysqli_fetch_assoc($login); //array asociativo con los valores de la consulta
        
        //var_dump($user);
        //die();


    //comprobar la contraseña
        $verify = password_verify($password,$user['password']);

        if($verify){
            //Utilizar una session para guardas los datos del usuario logeado
            $_SESSION['user'] = $user;

            //BORRAMOS LA SESION DEL ERROR
            
            if(isset($_SESSION['error_login'])){
                session_unset();
            }
            
        }else{
            //Si algo falla enviar una sesion con el fallo
            $_SESSION['error_login'] = "INCORRECT LOGIN";
        }
    }else{
        //mensaje de error
        $_SESSION['error_login'] = "INCORRECT LOGIN";
    }

}


//redirigir al index

header('Location: index.php');