<?php

//cargamos el modelo 

require_once 'models/usuario.php';


class usuarioController{
    
    public function index(){
        echo "controlador Usuarios, Accion index";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        //recogemos los datos que nos llegan
        if(isset($_POST)){

            //controlamos si existe-- si existe el valor es $_POST y si no false
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos= isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email= isset($_POST['email']) ? $_POST['email'] : false;
            $password= isset($_POST['password']) ? $_POST['password'] : false;


            if($nombre && $apellidos && $email && $password ){
            //recogemos todos los datos desde el formulario
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                //guardamos en la base de datos
                $save = $usuario->save();
                if($save){
                    $_SESSION['register']="complete";
                    //echo "registro completado";
                }else{
                    $_SESSION['register'] = 'failed';
                }
            }else{
                $_SESSION['register'] = 'failed';
            }
        }else{
            $_SESSION['register']="failed";
        }
        header('Location:'.base_url.'usuario/registro');
    }

    public function login(){
        //comprobar si nos llegan por post los datos
        if(isset($_POST)){
            //Identificar al usuario
            //Consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();


            //Crear una session

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;

                //crear sesion para usuario administrador
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = "Identificacion fallida !!";
            }

            
        }

        header("Location:".base_url);
    }

    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }

        header('Location:'.base_url);
    }

}