<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl d-flex flex-column "> 
    <h2 class="text-center my-2">Alumno(a): <?php echo ($alumno->nombre . " " . $alumno->apellido)  ?> </h2>
    <div class="row justify-content-center">
        <div class="col-md-6 table-responsive">
            <div class="d-flex justify-content-between my-1"> 
                <h3 class="mb-0">Pagos</h3>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Fecha Inicio</th>
                        <th scope="col">Fecha Final</th>
                        <th scope="col">Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pagos as $key => $pago) : ?>
                        <tr>
                            <td class="py-1"><?php 
                                $date = date_create($pago->fechaInicio); 
                                echo date_format($date,"d-m-Y");  
                            ?></td>
                            <td class="py-1"><?php 
                                $date = date_create($pago->fechaFin);
                                echo date_format($date,"d-m-Y"); 
                            ?></td>
                            <td class="py-1"><?php 
                                switch ($pago->estatus) {
                                    case '1':
                                        echo 'PAGADO';
                                        break;
                                    case '2':
                                        echo 'RETRASADO';
                                        break;
                                    case '3':
                                        echo 'PENDIENTE';
                                        break;
                                    
                                    default:
                                        echo '';
                                        break;
                                }
                            ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-6 table-responsive">
            <div class="d-flex justify-content-between my-1"> 
                <h3 class="mb-0">Asistencia</h3>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($asistencias as $key => $asistencia) : ?>
                        <tr>
                            <td class="py-1"><?php 
                                $date = date_create($asistencia->fecha); 
                                echo date_format($date,"d-m-Y");  
                            ?></td>
                            <td class="py-1"><?php echo $asistencia->estatus ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>