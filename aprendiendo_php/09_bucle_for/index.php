<?php

//FOR
$resultado = 0;

for($i=0;$i <=100; $i++){
    $resultado = $resultado + $i;

}
echo "<h1> El resultado es: $resultado</h1>";

echo"<br/>";
echo"<hr/>";


if(isset($_GET['numero'])){
    //cambiamos tipo de dato
    $numero = (int) $_GET['numero']; // castear de string a int
}else{
    $numero = 1;
}

echo "<h1> Tabla de multiplicar del numero $numero </h1>";



for($contador = 1;$contador <=10; $contador++){

    if ($numero == 45){
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }
    echo "$numero x $contador = ".($numero*$contador)."<br />";
}



?>