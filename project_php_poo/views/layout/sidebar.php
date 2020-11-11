 <!-- BARRA LATERAL -->
 <aside id="lateral">

<div id="login" class="block_aside">

<?php if(!isset($_SESSION['identity'])): ?>
    <h3>Entry to the Web</h3>
    <form action="<?=base_url?>usuario/login" method="post">
        <label for="email">Email</label>
        <input type="email" name="email"/>
        <label for="password">Password</label>
        <input type="password" name="password"/>
        
        <input type="submit" value="Send"/>
    </form>
<?php else: ?>
    <h3><?=$_SESSION['identity']->nombre?></h3>
<?php endif; ?>

    <ul>
        <?php if(isset($_SESSION['admin'])):?>
            <li><a href="#">Gestionar categorias</a></li>
            <li><a href="#">Gestionar productos</a></li>
            <li><a href="#">Gestionar pedidos</a></li>
        <?php endif; ?>

        <?php if(isset($_SESSION['identity'])): ?>
            <li><a href="#">Mis pedidos</a></li>
            <li><a href="<?=base_url?>usuario/logout">Cerrar sesion</a></li>
        <?php endif; ?>
    </ul>
</div>

</aside>

 <!-- CONTENIDO CENTRAL -->
 <div id="central">