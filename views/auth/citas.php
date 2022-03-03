<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl">
    <section class="row justify-content-center">
        <h2 class="text-center p-2">Buscar Citas por Fecha</h2>
        <form class="col-md-6 "> 
            <div class="campo">
                <label class="form-label" for="fecha-listado">Fecha: </label>
                <input class="form-control mb-2" type="date" id="fecha-listado" name="fecha" value="<?php echo $fecha; ?>"> 
            </div>
        </form>
    </section>

    <section class="citas" id="citas-admin">
    <?php 
        if (count($citas) === 0) {
            echo '<h2 class="text-center p-2">No Hay Citas en esta fecha</h2>';
        }
    ?>
        <ul class="row list-unstyled justify-content-center">
            <?php 
                $idCita = 0;
                foreach ($citas as $key => $cita) :
                ?>
            <li class="col-sm-5 col-md-3 m-1 p-1 border border-dark rounded-3">
                <p>ID: <span><?php echo $cita->id; ?></span></p>
                <p>Hora: <span><?php echo $cita->hora; ?></span></p>
                <p>Plantel: <span><?php echo $cita->plantel; ?></span></p>
                <p>Informes: <span><?php echo $cita->informes; ?></span></p>
                <p>Cliente: <span><?php echo $cita->nombre . ' ' . $cita->apellido; ?></span></p>
                <p>Email: <span><?php echo $cita->email; ?></span></p>
                <p>Teléfono: <span><?php echo $cita->telefono; ?></span></p>
                <form method="POST" class="w-100" action="/citas/eliminar">
                    <input type="hidden" name="id" value="<?php echo $cita->id; ?>">
                    <input type="submit" class="btn btn-danger " value="Eliminar">
                </form>
            </li>
            <?php 
                endforeach;
            ?>
        </ul>
    </section>
    <section class="row gap-2 justify-content-center mb-2">
        <h2 class="text-center">Todas las Citas</h2>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th class="" scope="col">Plantel</th>
                        <th class="" scope="col">Informes</th>
                        <th class="" scope="col">Teléfono</th>
                        <th class="" scope="col">E-mail</th>
                        <th class="" scope="col">Fecha</th>
                        <th class="" scope="col">Hora</th>
                        <th class="" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($todas as $key => $cita) :?>
                    <tr>
                        <th class="py-1" scope="row"><?php echo $cita->id ?></th>
                        <td class="py-1"><?php echo $cita->nombre; ?></td>
                        <td class="py-1"><?php echo $cita->apellido; ?></td>
                        <td class="py-1"><?php echo $cita->plantel; ?></td>
                        <td class="py-1"><?php echo $cita->informes; ?></td>
                        <td class="py-1"><?php echo $cita->telefono; ?></td>
                        <td class="py-1"><?php echo $cita->email; ?></td>
                        <td class="py-1"><?php echo $cita->fecha; ?></td>
                        <td class="py-1"><?php echo $cita->hora; ?></td>
                        <td class="">
                            <form method="POST" class="w-100" action="/citas/eliminar">
                                <input type="hidden" name="id" value="<?php echo $cita->id; ?>">
                                <input type="submit" class="btn btn-danger " value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>