<?php

//crear directorios

if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta', 0777) or die("No se puede crear la carpeta");
}else{
    echo "Ya existe la carpeta";
}

//Borrar directorios
// rmdir('mi_carpeta');

echo "<br/>";
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo !='.' && $archivo !='..'){
            echo $archivo."<br/>"; 
        }
      
    }
}

?>