<?php require_once 'includes/conexion.php';?>
<?php require_once 'includes/helpers.php';?>
<?php
      $entry_actual = showEntry($db,$_GET['id']); 
      if(!isset($entry_actual['id'])){
          header("Location:index.php");
      }

      
?>



<?php require_once 'includes/header.php'; ?>         
<?php require_once 'includes/lateral.php'; ?>

        <!-- Main box-->
        <div id="main">

           
            <h2><?=$entry_actual['titulo'];?></h2>

            <a href="category.php?id=<?=$entry_actual['categoria_id']?>">
                <h3><?=$entry_actual['categoria'];?></h3>
            </a>
            <h4><?=$entry_actual['fecha']; ?> | <?=$entry_actual['usuario'] ?></h4>

            <p>
                <?=$entry_actual['descripcion']; ?>
            </p>


        <!--añadimos dos botones para modificar y eliminar las entradas-->

        <?php if(isset($_SESSION['user']) && $_SESSION['user']['id']==$entry_actual['usuario_id']): ?>
        <br/>
            <a href="update_entry.php?id=<?=$entry_actual['id']?>" class="button button-orange">Update Entry</a>
            <a href="delete_entry.php?id=<?=$entry_actual['id']?>" class="button button-green">Delete Entry</a>
        <?php endif; ?>
        </div>

       
<?php require_once 'includes/footer.php'; ?>