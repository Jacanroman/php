<?php

function showError($errores, $campo){
    $alert = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alert= "<div class='alert alert-error'>".$errores[$campo]."</div>";
    }

    return $alert;
}

function deleteError(){
    $delete = false;

    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        //$delete = session_unset();
        $delete = true;
    }

    if(isset($_SESSION['errores_entry'])){
        $_SESSION['errores_entry'] = null;
        //$delete = session_unset();
        $delete = true;
    }

    
    if(isset($_SESSION['finish'])){
        $_SESSION['finish'] = null;
        //$delete= session_unset();
        $delete = true;
        
    }
    
    return $delete;
}


function showCategories($conexion){

    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categories = mysqli_query($conexion,$sql);

    /*si categorias existe y el numero de filas es >=1 
    devolvemos categorias si no devolvemos false */
    $result = array();

    if($categories && mysqli_num_rows($categories)>=1){
        $result = $categories;
    }

    return $result;
}


function showEntry($conexion, $id){
   
    $sql= "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS usuario "  
    . " FROM entradas e ".
    "INNER JOIN categorias c ON e.categoria_id = c.id ".
    "INNER JOIN usuarios u ON e.usuario_id = u.id ".
    "WHERE e.id = $id ";

    $entry = mysqli_query($conexion, $sql);

    $result = array();

    if($entry && mysqli_num_rows($entry)>=1){
       $result = mysqli_fetch_assoc($entry); 
    }

    return $result;

}


function showLastEntries($conexion){
    
    
    $sql = "SELECT e.*, c.nombre AS category FROM entradas e ".
        "INNER JOIN categorias c ON e.categoria_id = c.id ".
        "ORDER BY e.id DESC LIMIT 4";
    

    //$sql = "SELECT * FROM entradas";
    $entries = mysqli_query($conexion, $sql);

    $result = array ();

    if($entries && mysqli_num_rows($entries)>=1){
        $result = $entries;
    }
    return $result;
}



function showAllEntries($conexion, $category=null, $search=null){
    
    
    $sql = "SELECT e.*, c.nombre AS category FROM entradas e ".
        "INNER JOIN categorias c ON e.categoria_id = c.id ";

    if(!empty($category)){
        $sql .= "WHERE e.categoria_id=$category ";
    }

    if(!empty($search)){
        $sql .= "WHERE e.titulo LIKE '%$search%' ";
    }

    $sql .= "ORDER BY e.id DESC";
    
    //echo $sql;
    //die();

    //$sql = "SELECT * FROM entradas";
    $entries = mysqli_query($conexion, $sql);

    $result = array ();

    if($entries && mysqli_num_rows($entries)>=1){
        $result = $entries;
    }
    return $result;
}


function showCategory($conexion,$id){

    $sql = "SELECT * FROM categorias WHERE id = $id;";
    $categories = mysqli_query($conexion,$sql);

    /*si categorias existe y el numero de filas es >=1 
    devolvemos categorias si no devolvemos false */
    $result = array();

    if($categories && mysqli_num_rows($categories)>=1){
        $result = mysqli_fetch_assoc($categories);
    }

    return $result;
}



