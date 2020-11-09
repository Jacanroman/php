


<h1>Listado de notas</h1>
<?php while($nota = $notas->fetch_object()): ?>
    <?=$nota->titulo?> - <?=$nota->titulo?><br/>
<?php endwhile; ?>