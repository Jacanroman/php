
<?php

    if(!isset($_POST['search'])){
        header("Location:index.php");
    }
    
?>

<?php require_once 'includes/header.php'; ?>         
<?php require_once 'includes/lateral.php'; ?>

        <!-- Main box-->
        <div id="main">

           
            <h2>Search of <?=$_POST['search']?></h2>


            <?php 
                $entries = showAllEntries($db,null,$_POST['search']); 
                
                if(!empty($entries) && mysqli_num_rows($entries)>=1):
                    /*por cada fila que recorra que me cree una variable
                    entry con un array asociativo*/
                    while($entry = mysqli_fetch_assoc($entries)):
            ?>    
                <!-- Creamos el article cogiendo los datos del bucle con las entradas -->
            

                        <article class="entries">

                            <a href="entry.php?id=<?=$entry['id'];?>">
                                <h3><?=$entry['titulo'] ?></h3>
                                <span class="date"><?=$entry['category'].' | '.$entry['fecha'] ?></span>
                                <p> 
                                    <!-- utilizo substr para seleccionar solo
                                    los 180 primeros caracteres de la descripcion -->
                                    <?=substr($entry['descripcion'], 0,180)."..." ?>
                                </p>
                            </a>
                        </article>


            <?php
                    endwhile;
                else:
            ?>
            <div class="alert">It have not entries for this category</div>
            <?php
                endif
            ?>

          

        </div>

       
<?php require_once 'includes/footer.php'; ?>
