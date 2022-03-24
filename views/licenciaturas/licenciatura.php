<?php include_once __DIR__ . '/../templates/barra.php'; ?>

<main class="container-xl">
    <h2 class="text-center my-2"><?php echo utf8_encode($carrera->nombre); ?></h2>
    <div class="row">
        <div class="col-md-8">
            <h3 class="bg-info text-white p-1">Perfil de Ingreso</h3>
            <p><?php echo utf8_encode($carrera->ingreso); ?></p>
        
            <h3 class="bg-info text-white p-1">Perfil de Egreso</h3>
            <p><?php echo utf8_encode($carrera->egreso); ?></p>
        </div>
    
        <div class="col-md-4">
            <picture>
                <source srcset="build/img/lic/<?php echo $carrera->id; ?>.webp" type="image/webp">
                <img class="img-fluid w-100" loading="lazy" src="build/img/lic/<?php echo $carrera->id; ?>.jpg" width="200" height="300" alt="Imagen de la carrera">
            </picture>
            <h3 class="text-center my-2">Requisitos Administrativos</h3>
            <ul class="list-unstyled">
                <li><p>Original y 5 copias:</p></li>
                <li class="ms-5">Acta de nacimiento</li>
                <li class="ms-5">Curp</li>
                <li class="ms-5">Certificado de bachillerato o equivalente</li>
                <li><p>5 copias de:</p></li>
                <li class="ms-5">Comprobante de domicilio</li>
                <li class="ms-5">INE</li>
                <li><p>Fotos:</p></li>
                <li class="">8 fotografía tamaño infantil blanco y negro papel mate sin brillos ni retoques</li>
            </ul>
        </div>

        <div class="col-md-6">
            <h3 class="bg-info text-white p-1">Horarios</h3>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Día</th>
                            <th scope="col">Hora de Inicio</th>
                            <th scope="col">Hora de Fin</th>
                            <th scope="col">Plantel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($horarios as $key => $horario) :?>
                        <tr>
                            <th class="py-1" scope="row"><?php echo utf8_encode($horario->dia) ?></th>
                            <td class="py-1"><?php $date = date_create($horario->hora); echo date_format($date,"H:i"); ?></td>
                            <td class="py-1"><?php $date = date_create($horario->horaFin); echo date_format($date,"H:i"); ?></td>
                            <td class="py-1"><?php echo $horario->plantel; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
