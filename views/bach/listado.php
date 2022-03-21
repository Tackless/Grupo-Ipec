<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Modalidades de Bachillerato</h2>
    <div class="row justify-content-center">
    <?php foreach ($bachillerato as $opcion) : ?>
        <div class="col-md-6 col-lg-4 mb-1 ">
            <a href="/bachillerato?id=<?php echo $opcion->id; ?>"  class="card rounded listado-modalidades">
                <picture>
                    <source srcset="build/img/bach/<?php echo $opcion->id; ?>.webp" type="image/webp">
                    <img class="img-fluid w-100" loading="lazy" src="build/img/bach/<?php echo $opcion->id; ?>.jpg" width="200" height="300" alt="Imagen de la carrera">
                </picture>
                <div class="card-body">
                    <h3 class="card-title text-center"><?php echo utf8_encode($opcion->nombre); ?></h3>
                </div>
            </a>    
        </div>
    <?php endforeach ?>
    </div>
</main>