<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<div class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Bachillerato <?php echo utf8_encode($bachillerato->nombre); ?></h2>

    <div class="row">
        <div class="col-md-8">
            <h3 class="bg-info text-white p-1">Perfil de Ingreso</h3>
            <p><?php echo utf8_encode($bachillerato->ingreso); ?></p>

            <h3 class="bg-info text-white p-1">Perfil de Egreso</h3>
            <p><?php echo utf8_encode($bachillerato->egreso); ?></p>
        </div>
        <div class="col-md-4">
            <img src="build/img/bach/<?php echo $bachillerato->id; ?>.webp" alt="Imagen opcion" class="img-fluid">
        </div>
    </div>


    

</div>
