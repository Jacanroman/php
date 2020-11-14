<h1>Gestion de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    Crear Producto
</a>

<!-- con las sesiones que hemos creados las utilizamos para mostrar
un mensaje de exito o error.-->
<?php if(isset($_SESSION['producto']) && $_SESSION['producto']=='completed'):?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto']!='completed'):?>
    <strong class="alert_red">El producto No se ha creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>


<?php if(isset($_SESSION['delete']) && $_SESSION['delete']=='completed'):?>
    <strong class="alert_green">El producto se ha borrado correctamente</strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']!='completed'):?>
    <strong class="alert_red">El producto No se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>

<table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th>Acciones</th>
        </tr>
    <?php while($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?=$pro->id;?></td>
            <td><?=$pro->nombre;?></td>
            <td><?=$pro->precio;?></td>
            <td><?=$pro->stock;?></td>
            <td>
                <!--se utiliza el & porque producto y eliminar tambien son get
                entonces no es el primer get id es el tercer get por lo tanto 
                hay que enlazarlo con & -->
                <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Eliminar</a>
                <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button">Editar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>