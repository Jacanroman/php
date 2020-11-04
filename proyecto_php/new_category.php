<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/lateral.php' ?>

<div id="main">
    
    <h2>Create New Category</h2>

    <p>
        Add new categories to the blog.
    </p>
    <br/>
    <form action="save_category.php" method="POST">
        <label for="name">Name of the category: </label>
        <input type="text" name="name" />

        <input type="submit" value="Save">
    </form>
        

</div>

       
<?php require_once 'includes/footer.php'; ?>
