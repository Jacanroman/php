<?php

/*
Sesion: Almacenar y persistir datos del usuario mientras que navega en un
sitio web haste que cierra sesion o cierra el navegador
*/

//Iniciar la sesion

session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//Variable de sesion
$_SESSION['variable persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."<br/>";
echo $_SESSION['variable persistente']

?>