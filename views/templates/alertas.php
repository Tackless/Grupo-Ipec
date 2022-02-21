<?php 
    foreach ($alertas as $key => $mensajes) {
        foreach ($mensajes as $mensaje) {
?>
    <div class="alerta col-md-10 <?php echo $key; ?>">
        <?php echo $mensaje; ?>
    </div>
<?php 

        }
    }
?>