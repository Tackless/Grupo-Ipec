<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<main class="container-xl d-flex flex-column "> 
    <h2 class="text-center my-2">Editar Alumno <?php  ?> </h2>
    <div class="row justify-content-evenly">
        <a href="/gestion" class="col-md-2 btn btn-info text-white ms-md-auto my-auto p-1">Volver</a>
    </div>
    <div class="row my-1 justify-content-center">
        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
    </div>
    <div class="row justify-content-center">
        <form method="POST" class="col-md-8 needs-validation" novalidate>
            <?php include __DIR__ . '/formulario.php'; ?>
            <input type="submit" value="Actualizar Alumno(a)" class="btn btn-success my-2">
        </form>
    </div>
</main>