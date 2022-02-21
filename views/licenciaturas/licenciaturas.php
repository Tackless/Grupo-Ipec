<div class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Licenciaturas</h2>
    <div class="row">
    <?php foreach ($carreras as $carrera) : ?>
        
        <div class="container-xl col-md-6 mb-1 ">
            <div class="card rounded">
                <img src="build/img/lic/<?php echo $carrera->id; ?>.webp" alt="Imagen Carrera" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo utf8_encode($carrera->nombre); ?></h5>
                    <p class="card-text"><?php echo utf8_encode($carrera->descripcion); ?></p>
                    <a href="/licenciatura?id=<?php echo $carrera->id; ?>" class="btn btn-primary">Ver más...</a>
                </div>
            </div>    
        </div>
    <?php endforeach ?>
    </div>
</div>
