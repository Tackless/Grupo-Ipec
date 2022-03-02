<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Licenciaturas</h2>
    <div class="row">
    <?php foreach ($carreras as $carrera) : ?>
        
        <div class="col-md-6 mb-1 ">
            <a href="/licenciatura?id=<?php echo $carrera->id; ?>" class="card rounded listado-modalidades">
                <picture>
                    <source srcset="build/img/lic/<?php echo $carrera->id; ?>.webp" type="image/webp">
                    <img class="img-fluid w-100" loading="lazy" src="build/img/lic/<?php echo $carrera->id; ?>.jpg" width="200" height="300" alt="Imagen de la carrera">
                </picture>
                <div class="card-body">
                    <h5 class="card-title"><?php echo utf8_encode($carrera->nombre); ?></h5>
                </div>
            </a>    
        </div>
    <?php endforeach ?>
    </div>
</main>
