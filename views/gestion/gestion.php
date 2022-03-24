<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl d-flex flex-column">
    <h2 class="text-center my-2">Gestión</h2>

    <a href="gestion/crear" class="btn btn-success mx-auto">Registrar Alumno</a>
    <section>
        <h3 class="text-center p-2">Buscar Alumnos por Matricula</h3>
        <div class="row justify-content-center">
            <form class="col-md-6 "> 
                <div class="d-flex align-items-center justify-content-between">
                    <label class="form-label me-1 my-0" for="alumno-buscado">Matricula: </label>
                    <input class="form-control w-75 " type="num" min="1" id="alumno-buscado" name="alumno" value="<?php echo $alumnoId ?>" placeholder="Matricula del Alumno"> 
                    <input type="submit" value="Buscar" class="btn btn-primary text-white ms-1 ">
                </div>
            </form>
        </div>
    </section>

    <section class="row justify-content-center">
    <?php 
        if (count($busqueda) === 0) {
            echo '<h2 class="text-center p-2">No Hay Alumnos con esa Matricula</h2>';
        }
    ?>

        <?php foreach ($busqueda as $key => $alumno) : ?>
        <div class="col-sm-4 m-1 p-1">
            <div class="d-flex">
                <p>Alumno: </p>
                <p class="ms-auto"><?php echo $alumno->nombre . ' ' . $alumno->apellido; ?></p>
            </div>
            <div class="d-flex">
                <p>Plantel: </p>
                <p class="ms-auto"><?php echo $alumno->plantel; ?></p>
            </div>
            <div class="d-flex">
                <p>Modalidad: </p>
                <p class="ms-auto"><?php echo $alumno->modalidad; ?></p>
            </div>
            <div class="d-flex justify-content-between"> 
                <a href="/alumnos/detalles?id=<?php echo $alumno->id; ?>"class="btn btn-primary text-white">Detalles</a>
                <a href="/gestion/editar?id=<?php echo $alumno->id; ?>" class="btn btn-primary text-white">Editar</a>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    
    <section class="row gap-2 justify-content-center mb-2">
        <h2 class="text-center">Todos los Alumnos</h2>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Matricula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th class="" scope="col">Plantel</th>
                        <th class="" scope="col">Modalidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($todos as $key => $alumno) :?>
                    <tr>
                        <th class="py-1" scope="row"><?php echo $alumno->matricula ?></th>
                        <td class="py-1"><?php echo $alumno->nombre; ?></td>
                        <td class="py-1"><?php echo $alumno->apellido; ?></td>
                        <td class="py-1"><?php echo $alumno->plantel; ?></td>
                        <td class="py-1"><?php echo $alumno->modalidad; ?></td>
                        <td><a href="/alumnos/detalles?id=<?php echo $alumno->id; ?>" class="btn btn-success text-white">Detalles</a></td>
                        <td><a href="/gestion/editar?id=<?php echo $alumno->id; ?>" class="btn btn-primary text-white">Editar</a></td>
                    </tr>
                    <?php endforeach; ?>

                    
                </tbody>
            </table>
        </div>
    </section>
</main>
