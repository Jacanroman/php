<?php
//Conectar a la base de datos

//$conexion = mysqli_connect("url","user","password", "name of the database");
$conexion = mysqli_connect("localhost","root","", "phpmysql");

//Comprobar si la conexion es correcta

if(mysqli_connect_errno()){
    echo "la conexion a la base de datos MySql ha fallado: ".mysqli_connect_error(); 
}else{
    echo "Conexion realizada correctamente";
    echo "<hr/>";
}

// Consulta para configurar la codificacion de caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta SELECT desde PHP

$query = mysqli_query($conexion, "SELECT * FROM notas");
//$notas = mysqli_fetch_assoc($query);

while($nota = mysqli_fetch_assoc($query)){
    echo "<h2>".$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br/>';
}



//Insertar en las base de datos desde PHP

$sql= "INSERT INTO notas VALUES (null, 'Nota desde PHP','Esto es una nota desde PHP','green')";
$insert = mysqli_query($conexion,$sql);

if($insert){
    echo "Datos insertados correctamente";
}else{
    echo "Error: ".mysql_error($conexion);
}

?>