<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<h2 class="text-center"><?php echo utf8_encode($carrera->nombre); ?></h2>

<div class="container-xl">
    <div class="row">
        <div class="col-md-8">
            <h3 class="bg-info text-white p-1">Perfil de Ingreso</h3>
            <p><?php echo utf8_encode($carrera->ingreso); ?></p>
        
            <h3 class="bg-info text-white p-1">Perfil de Egreso</h3>
            <p><?php echo utf8_encode($carrera->egreso); ?></p>
        </div>
    
        <div class="col-md-4">
            <img src="build/img/lic/<?php echo $carrera->id; ?>.webp" alt="Imagen opcion" class="img-fluid">
        </div>
    </div>
</div>
