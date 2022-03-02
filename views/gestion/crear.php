<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl d-flex flex-column "> 
    <h2 class="text-center mt-2">Registrar Nuevo Alumno</h2>
    <div class="row justify-content-evenly">
        <?php if ($resultado) :?>
            <p class=" col-md-4 bg-success text-white text-center fs-3 p-1">Alumno Registrado </p>
        <?php endif  ?>
        <a href="/gestion" class="col-md-2 btn btn-info text-white  my-auto p-1">Volver</a>
    </div>
    <div class="row justify-content-center">
        <form method="POST" class="col-md-8 needs-validation" novalidate>
            <?php include __DIR__ . '/formulario.php'; ?>
            <input type="submit" value="Registrar Alumno(a)" class="btn btn-success my-2">
        </form>
    </div>
</main>