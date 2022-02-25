<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<div class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Modalidades de Bachillerato</h2>
    <div class="row">
    <?php foreach ($bachillerato as $opcion) : ?>
        
        <div class="container-xl col-md-6 col-lg-4 mb-1 ">
            <div class="card rounded">
                <img src="build/img/bach/<?php echo $opcion->id; ?>.webp" alt="Imagen opcion" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo utf8_encode($opcion->nombre); ?></h5>
                    <p class="card-text"><?php echo utf8_encode($opcion->descripcion); ?></p>
                    <a href="/bachillerato?id=<?php echo $opcion->id; ?>" class="btn btn-primary">Ver más...</a>
                </div>
            </div>    
        </div>
    <?php endforeach ?>
    </div>
</div>