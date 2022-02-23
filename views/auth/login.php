<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<div class="container-xl p-2 d-grid gap-2">
    <div class="text-center">
        <h2>Iniciar Sesión</h2>
        <p>Inicio de sesión con tus datos</p>
    </div>
    
    <div class="row justify-content-center">

    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form method="POST" class="col-md-10 needs-validation" novalidate>
            <div class="mb-1">
                <label class="form-label" for="usuario">ID: </label>
                <input class="form-control" type="text" id="usuario" placeholder="Tu ID" name="id" required>
                <span class="invalid-feedback">Escribe tu ID.</span>
            </div>
            
            <div class="mb-1">
                <label class="form-label" for="password">Contraseña</label>
                <input class="form-control" type="password" id="password" placeholder="Tu Contraseña" name="password" required>
                <span class="invalid-feedback">Escribe tu Contraseña.</span>
            </div>

            <input type="submit" class="btn btn-success my-1 fs-5 px-1" value="Iniciar Sesión">
        </form>
    </div>
</div>