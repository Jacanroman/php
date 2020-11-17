<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'): ?>

<h1>Tu pedido se ha confirmado</h1>
<p>Tu pedido ha sido guardado con exito, una vez que realices
    el pago del pedido, sera procesado y enviado.
</p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
   <h1>Tu pedido no ha podido procesarse</h1>
   
<?php endif; ?>