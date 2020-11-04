<?php require_once 'conexion.php'; ?>

<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videogames Blog</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
</head>
<body>
    
    <!-- Header -->
    <header id="header">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Videogames Blog
            </a>
        </div>

        <!-- navBar-->
        <!-- Conseguir las categorias -->
        
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                    $categories = showCategories($db); //llamamos a la funcion 
                    //comprobamos si $categories esta vacio o con datos
                    if(!empty($categories)):
                        //hacemos un bucle para coger los datos
                        while($category = mysqli_fetch_assoc($categories)): 
                ?>
                    <!-- Creamos el li cogiendo los datos del bucle
                    el id de cada categoria y el nombre de cada categoria -->
                    <li>
                        <a href="category.php?id=<?=$category['id']?>"><?=$category['nombre']?></a>
                    </li>
                <?php     
                    endwhile;
                    endif; 
                ?>
                <li>
                    <a href="index.php">About Us</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>

    <div id="container">