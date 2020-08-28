<?php

//abrir archivo
$abrir_archivo = fopen("fichero_texto.txt", "a+");

//Leer contenido
while(!feof($abrir_archivo)){
$contenido = fgets($abrir_archivo);
echo $contenido."<br />";
};


//Escribir archivo
fwrite($abrir_archivo, "****Soy un texto metodo desde php****");

//cerrar archivo
fclose($abrir_archivo);

// copiar contenido
//copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al copiar");

//Renombrar fichero
//rename('fichero_copiado.txt', 'archivo_renombrado.txt');

//Eliminar 
//unlink('archivo_renombrado.txt') or die('Error al borrar');


if(file_exists('fichero_texto.txt')){
    echo "el archivo existe!!";
}else{
    echo "No existe";
}


?>