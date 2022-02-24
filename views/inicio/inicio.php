<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<div class="hero"></div>

<main class="container-xl d-flex flex-column align-items-center mb-2">

    <h2 class="my-2">Oferta Academica</h2>

    <div id="indicadores" class="carousel slide carrusel" data-bs-ride="carousel">
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

<section>
    <h2 class="text-center my-2">Promociones Febrero</h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 promociones ">
            
        </div>
        <div class="col-md-6">
            <div class="row justify-content-center gap-2">
                <div class="col-md-5 d-flex justify-content-center mt-2 mt-md-0">
                    <a href="#" class="btn btn-outline-info">Lorem ipsum dolor, sit amet</a>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-info">Lorem ipsum dolor, sit amet</a>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-info">Lorem ipsum dolor, sit amet</a>
                </div>
                <div class="col-md-5 d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-info">Lorem ipsum dolor, sit amet</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <h2 class="text-center my-2">Galeria</h2>

    <div class="container-xl mb-2">
        <div class="row galeria-imagenes justify-content-center">
            
        </div>
    </div>

</section>

