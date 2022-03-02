<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<div class="container-xl d-flex flex-column">
    <h2 class="text-center my-2">Gestion</h2>

    <a href="gestion/crear" class="btn btn-success mx-auto">Registrar Alumno</a>
    <h3 class="text-center p-2">Buscar Alumnos por Id</h3>
    <div class="row justify-content-center">
        <form class="col-md-6 "> 
            <div class="d-flex align-items-center justify-content-between">
                <label class="form-label" for="alumno-buscado">Id: </label>
                <input class="form-control w-75 " type="num" min="1" id="alumno-buscado" name="alumno" value="<?php echo $alumnoId; ?>" placeholder="Id del Alumno">
                <input type="submit" value="Buscar" class="btn btn-info text-white">
            </div>
        </form>
    </div>

    <?php 
        if (count($busqueda) === 0) {
            echo '<h2 class="text-center p-2">No Hay Alumnos con esa Id</h2>';
        }
    ?>

    <div class="row justify-content-center">
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
            <div class="d-flex">
                <form method="POST" class="w-100" action="/gestion/eliminar">
                    <input type="hidden" name="id" value="<?php echo $alumno->id; ?>">
                    <input type="submit" class="btn btn-danger " value="Eliminar">
                </form>
                <a href="/gestion/actualizar?id=<?php echo $alumno->id; ?>" class="btn btn-info text-white">Actualizar</a>
            </div>
        </div>
        <?php 
            endforeach;
        ?>
    </div>
    
    <div class="row gap-2 justify-content-center mb-2">
        <h2 class="text-center">Todos los Alumnos</h2>

        <?php foreach ($todos as $key => $alumno) :?>
            <a href="/gestion/actualizar?id=<?php echo $alumno->id; ?>" class="col-md-3 border">
                <p>ID: <?php echo $alumno->id ?></p>
                <p>Nombre: <?php echo $alumno->nombre . ' ' . $alumno->apellido; ?></p>
            </a>
        <?php endforeach; ?>
    </div>

</div>
