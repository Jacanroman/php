<?php

/*
Ejercicio 2.
1. Una funcion
2. Validar un email con filter_var
3. Recoger una variable por get y validarla 
4. Mostrar el Resultado
*/


function validar($email){
  
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        return $email;
    }else{
        return 'NOT VALID';
    }

}


if(isset($_GET['email'])){
    echo(validar($_GET['email'])); 
}else{
    echo 'Pasa un email por get.....';
}




?>