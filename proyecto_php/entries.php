<?php require_once 'includes/header.php'; ?>
           
<?php require_once 'includes/lateral.php'; ?>

        <!-- Main box-->
        <div id="main">

            <h2>All the entries</h2>


            <?php 
                $entries = showAllEntries($db);
                
                if(!empty($entries)):
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
                endif;
            ?>

          

        </div>

       
<?php require_once 'includes/footer.php'; ?>


