<?php

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);  //para caducar la cookie
}

header('Location:ver_cookies.php');



?>