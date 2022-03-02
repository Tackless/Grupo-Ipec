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
            <picture>
                <source srcset="build/img/bach/<?php echo $bachillerato->id; ?>.webp" type="image/webp">
                <img class="img-fluid w-100" loading="lazy" src="build/img/lic/<?php echo $bachillerato->id; ?>.jpg" width="200" height="300" alt="Imagen de la carrera">
            </picture>
            <h3 class="text-center my-2">Requisitos Administrativos</h3>
            <ul class="list-unstyled">
                <p class="mt-1 mb-0">Edad Minima:</p>
                <?php switch ($bachillerato->id) {
                    case '1':
                        echo ('<li class="ms-5">15</li>');
                        break;  

                    case '2':
                        echo ('<li class="ms-5">18</li>');
                        break;  

                    default:
                        echo ('<li class="ms-5">22</li>');
                        break;
                } ?>
                <p>Original y 5 copias:</p>
                <li class="ms-5">Acta de nacimiento</li>
                <li class="ms-5">Curp</li>
                <li class="ms-5">Certificado de secundaria</li>
                <p>5 copias de:</p>
                <li class="ms-5">Comprobante de domicilio</li>
                <li class="ms-5">INE</li>
                <p>Fotos:</p>
                <li class="">8 fotografía tamaño infantil blanco y negro papel mate sin brillos ni retoques</li>
                
            </ul>
        </div>
    </div>


    

</div>
