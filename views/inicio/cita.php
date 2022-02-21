<div class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Agendar Cita</h2>

    <?php if ($resultado) :?>
        <div class="row justify-content-center">
            <p class="col-md-10 bg-success text-white text-center fs-3">Cita Creada con Éxito</p>
        </div>

    <?php endif  ?>

    <div class="row justify-content-center">
        <form method="POST" class="col-md-10 needs-validation" novalidate>
            <fieldset>
                <legend class="bg-primary text-center text-white fs-2 fw-bold">Tus Datos</legend>
                <div class="mb-1">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" id="nombre" class="form-control" placeholder="Tu Nombre" name="contacto[nombre]" required>
                    <span class="invalid-feedback">Escribe tu Nombre.</span>
                </div>
                <div class="mb-1">
                    <label for="nombre" class="form-label">Apellido: </label>
                    <input type="text" id="nombre" class="form-control" placeholder="Tu Apellido" name="contacto[apellido]" required>
                    <span class="invalid-feedback">Escribe tu Apellido.</span>
                </div>
                <div class="mb-1">
                    <label for="asunto" class="form-label">Plantel: </label>
                    <select class="form-select" id="validationCustom04" name="contacto[plantel]" required>
                        <option selected disabled value="">--Seleccionar--</option>
                        <option>Chalco</option>
                        <option>Valle de Chalco</option>
                    </select>
                    <span class="invalid-feedback">Elige una opción.</span>
                </div>
                <div class="mb-1">
                    <label for="asunto" class="form-label">Informes sobre: </label>
                    <select class="form-select" id="validationCustom04" name="contacto[informes]" required>
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

                <legend class="f-5">Elige forma de contacto: </legend>
                <div class="mb-1">
                    <input class="form-check-input" type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" required>
                    <label class="form-check-label" for="contactar-telefono">Teléfono</label>
                </div>
                <div class="mb-1">
                    <input class="form-check-input" type="radio" value="email" id="contactar-email" name="contacto[contacto]" required>
                    <label class="form-check-label" for="contactar-email">E-mail</label>
                </div>
                    
                <div class="mb-1" id="contacto">
                    
                </div>
                <div class="mb-1">
                    <label class="form-label" for="fecha">Fecha: </label>
                    <input class="form-control" type="date" id="fecha" min="<?php echo date('Y-m-d', strtotime('+1 day') ); ?>" name="contacto[fecha]" required>
                    <span class="invalid-feedback">Elige una Fecha Válida.</span>
                </div>
                <div class="mb-1">
                    <label class="form-label" for="hora">Hora</label>
                    <input class="form-control" type="time" id="hora" min="08:00" max="19:00" name="contacto[hora]" required>
                    <span class="invalid-feedback">Elige una Hora Válida.</span>
                </div>
            </fieldset>

            <div class="d-grid d-md-flex">
                <input type="submit" class="btn btn-secondary my-1 fs-5 px-1" value="Enviar Formulario">
            </div>
        </form>
    </div>
</div>
