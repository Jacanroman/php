<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/lateral.php' ?>

<div id="main">
    
    <h2>Create New Entry</h2>

    <p>
        Add new entries to the blog.
    </p>
    <br/>
    <form action="save_entry.php" method="POST">
        <label for="name">Title: </label>
        <input type="text" name="name" />
        <?php echo isset($_SESSION['errores_entry']) ? showError($_SESSION['errores_entry'], 'name'):'';?>

        <label for="description">Description: </label>
        <textarea name="description"></textarea>
        <?php echo isset($_SESSION['errores_entry']) ? showError($_SESSION['errores_entry'], 'description'):'';?>

        <label for="category">Category: </label>
        <select name="category">
            <?php 
                $categories = showCategories($db);
                if(!empty($categories)):
                    while($category = mysqli_fetch_assoc($categories)):
            ?>

                <option value="<?=$category['id']?>">
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
