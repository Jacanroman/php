<?php

/*Ejercicio 5 hacer un programa que muestre todos los numeros impares entre 
dos numeros que nos lleguen por la URL ($_Get) */


//var_dump($_GET);
if (isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 =  $_GET['numero1'];
$numero2 = $_GET['numero2'];

if($numero1<$numero2){
for($i=$numero1;$i<=$numero2;$i++){
    if($i%2 !=0){
    echo "$i<br/>";
    }
}
}else{
    echo "<h1>El numero 1 debe ser mayor al numero 2</h1>";
}

}else{
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}

?>
