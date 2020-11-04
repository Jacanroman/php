<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/lateral.php' ?>


    <div id="main">
        <h3>My data</h3>

        <?php
                if(isset($_SESSION['finish'])): ?>
                    <div class="alert alert-succes">
                        <?=$_SESSION['finish'] ?>
                    </div>
                <?php elseif(isset($_SESSION['errores']['general'])): ?>
                    <div class="alert alert-error">
                        <?=$_SESSION['errores']['general'] ?>
                    </div>
                <?php endif; ?>

        <form action="update_user.php" method="POST">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?=$_SESSION['user']['nombre'];?>"/>
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'name'):''; ?>

                 
                <label for="surname">Surname</label>
                <input type="text" name="surname" id="surname"value="<?=$_SESSION['user']['apellidos'];?>"/>  
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'surname'):''; ?>
                
                <label for="email">Email</label>
                <input type="email" name="email" id="email"value="<?=$_SESSION['user']['email'];?>"/>
                
                <?php echo isset($_SESSION['errores']) ? showError($_SESSION['errores'],'email'):''; ?>

                <input type="submit" name="submit" value="Update" />
        </form>
        <?php deleteError(); ?>
    </div>

<?php require_once 'includes/footer.php'; ?>