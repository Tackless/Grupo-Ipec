<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<div class="row">
    <div class="col-md-6 py-4 text-white text-center promociones"><h2 class="">Promociones Febrero</h2></div>
    <div class="col-md-6 bg-info ">
        <ul class="list-unstyled my-3 mx-2">
            <li class="mb-1 fw-bold text-white"> &raquo; Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
            <li class="mb-1 "> &raquo; Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
            <li class="mb-1 "> &raquo; Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
            <li class="mb-1 "> &raquo; Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
        </ul>
    </div>
</div>

<main class="container-xl mb-2">

    <h2 class="text-center p-2">Oferta Academica</h2>

    <div id="indicadores" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button class="active" type="button" data-bs-target="#indicadores" data-bs-slide-to="0"></button>
            <button type="button" data-bs-target="#indicadores" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a type="button" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#modalBach">
                    <h3 class="text-dark text-center mb-0">Bachillerato</h3>
                    <img src="build/img/bachillerato.webp" alt="Imagen Bachillerato" class="img-fluid">
                </a>
            </div>

            <?php include_once __DIR__ . '/../templates/modal-bachillerato.php'; ?>

            <div class="carousel-item">
                <a href="licenciaturas">
                    <h3 class="text-dark text-center mb-0">Licenciatura</h3>
                    <img src="build/img/licenciaturas.webp" alt="Imagen Licenciaturas" class="img-fluid">
                </a>
            </div>

            <button type="button" class="carousel-control-prev" data-bs-target="#indicadores" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button type="button" class="carousel-control-next" data-bs-target="#indicadores" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</main>

<!-- <section>
    <h2 class="text-center">Galeria</h2>

    <div class="container-xl galeria-imagenes">

    </div>

</section> -->

