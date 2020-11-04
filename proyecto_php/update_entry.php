<?php require_once 'includes/redirection.php' ?>
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



<div id="main">
    
    <h2>Update Entry</h2>

    <p>
        Update the entry: <?=$entry_actual['titulo'] ?>
        
        
    </p>
    <br/>
    <form action="save_entry.php?editar=<?=$entry_actual['id']?>" method="POST">
        <label for="name">Title: </label>
        <input type="text" name="name" value="<?=$entry_actual['titulo'] ?>"/>
        <?php echo isset($_SESSION['errores_entry']) ? showError($_SESSION['errores_entry'], 'name'):'';?>

        <label for="description">Description: </label>
        
        <textarea name="description"><?=$entry_actual['descripcion'] ?></textarea>
        <?php echo isset($_SESSION['errores_entry']) ? showError($_SESSION['errores_entry'], 'description'):'';?>

        <label for="category">Category: </label>
        <select name="category">
            <?php 
                $categories = showCategories($db);
                if(!empty($categories)):
                    while($category = mysqli_fetch_assoc($categories)):
            ?>

                <option value="<?=$category['id']?>" <?=($category['id'] == $entry_actual['categoria_id']) ? 'selected="selected"' : '' ?>>
                <?=$category['nombre']?>
                </option>
            <?php
                endwhile;
                endif;
            ?>

        </select>
        <?php echo isset($_SESSION['errores_entry']) ? showError($_SESSION['errores_entry'], 'category'):'';?>

        <input type="submit" value="Save">
    </form>
        
    <?php deleteError() ?>
</div>














<?php require_once 'includes/footer.php'; ?>