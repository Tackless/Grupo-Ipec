<?php include_once __DIR__ . '/../templates/barra.php'; ?>
<div class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Agendar Cita</h2>

    <?php if ($resultado) :?>
        <div class="row justify-content-center">
            <p class="col-md-10 bg-success text-white text-center fs-3">Cita Creada con Éxito</p>
        </div>
        <a href="/" class="btn btn-outline-info p-1 mx-auto">Volver a Inicio</a>

    <?php endif  ?>

    <div class="row justify-content-center">
        <form method="POST" class="col-md-10 needs-validation" novalidate>
            <fieldset>
                <legend class="bg-info text-center text-white fs-2 fw-bold">Tus Datos</legend>
                <div class="mb-1">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" id="nombre" class="form-control" placeholder="Tu Nombre" name="contacto[nombre]" required>
                    <span class="invalid-feedback">Escribe tu Nombre.</span>
                </div>
                <div class="mb-1">
                    <label for="apellido" class="form-label">Apellido: </label>
                    <input type="text" id="apellido" class="form-control" placeholder="Tu Apellido" name="contacto[apellido]" required>
                    <span class="invalid-feedback">Escribe tu Apellido.</span>
                </div>
                <div class="mb-1">
                    <label for="plantel" class="form-label">Plantel: </label>
                    <select class="form-select" id="plantel" name="contacto[plantel]" required>
                        <option selected disabled value="">--Seleccionar--</option>
                        <option>Chalco</option>
                        <option>Valle de Chalco</option>
                    </select>
                    <span class="invalid-feedback">Elige una opción.</span>
                </div>
                <div class="mb-1">
                    <label for="informes" class="form-label">Informes sobre: </label>
                    <select class="form-select" id="informes" name="contacto[informes]" required>
                        <option selected disabled value="">--Seleccionar--</option>
                        <option>Lic. Psicología</option>
                        <option>Lic. Derecho</option>
                        <option>Lic. Pedagogía</option>
                        <option>Lic. Enfermería</option>
                        <option>Bachillerato en 18 meses</option>
                        <option>Bachillerato en 7 meses</option>
                        <option>Bachillerato en 1 examen</option>
                    </select>
                    <span class="invalid-feedback">Elige una opción.</span>
                </div>

                <legend class="fs-6">Elige forma de contacto: </legend>
                <div class="mb-1">
                    <input class="form-check-input" type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>
                    <label class="form-check-label" for="contactar-telefono">Teléfono</label>
                </div>
                <div class="mb-1">
                    <input class="form-check-input" type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
                    <label class="form-check-label" for="contactar-email">E-mail</label>
                </div>
                <div class="mb-1">
                    <input class="form-check-input" type="radio" value="ambos" id="contactar-ambos" name="contacto[contacto]" required>
                    <label class="form-check-label" for="contactar-ambos">Ambos</label>
                </div>
                    
                <div class="mb-1" id="contacto">
                    
                </div>
                <div class="mb-1">
                    <label class="form-label" for="fecha-cita">Fecha: </label>
                    <input class="form-control" type="date" id="fecha-cita" min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>" name="contacto[fecha]" required>
                    <span class="invalid-feedback">Elige una Fecha Válida.</span>
                </div>
                <div class="mb-1" id="hora-cita">
                    
                </div>
            </fieldset>

            <div class="d-grid d-md-flex">
                <input type="submit" class="btn btn-success my-1 fs-5 fw-bold px-1" value="Enviar Formulario">
            </div>
        </form>
    </div>
</div>
