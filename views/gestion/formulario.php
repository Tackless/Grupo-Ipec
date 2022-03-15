<fieldset>
    <p class="fs-4">Información General</p>

    <div class="mb-1">
        <label for="nombre" class="form-label">Nombre(s):</label>
        <input type="text" class="form-control" id="nombre" name="alumno[nombre]" value="<?php echo s( $alumno->nombre ); ?>" placeholder="Nombre Alumno(a)" required>
        <span class="invalid-feedback">Escribe el Nombre(s).</span>
    </div>
    
    <div class="mb-1">
        <label for="apellido" class="form-label">Apellido(s):</label>
        <input type="text" class="form-control" id="apellido" name="alumno[apellido]" value="<?php echo s( $alumno->apellido ); ?>" placeholder="Apellido Alumno(a)" required>
        <span class="invalid-feedback">Escribe el Apellido(s).</span>
    </div>

    <div class="mb-1">
        <label for="plantel" class="form-label">Plantel: </label>
        <select class="form-select" id="plantel" name="alumno[plantel]" required>
            <option selected disabled ><?php echo $alumno->plantel === '' ? '--Seleccionar--' : $alumno->plantel ?></option>
            <option>Chalco</option>
            <option>Valle de Chalco</option>
        </select>
        <span class="invalid-feedback">Elige una opción.</span>
    </div>

    <div class="mb-1">
        <label for="modalidad" class="form-label">Modalidad: </label>
        <select class="form-select" id="modalidad" name="alumno[modalidad]" required>
            <option selected disabled><?php echo $alumno->modalidad === '' ? '--Seleccionar--' : $alumno->modalidad ?></option>
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

    <div class="mb-1">
        <label for="matricula" class="form-label">Matricula:</label>
        <input type="text" class="form-control" id="matricula" name="alumno[matricula]" value="<?php echo s( $alumno->matricula ); ?>" placeholder="Matricula Alumno(a)" required>
        <span class="invalid-feedback">Escribe la Matricula.</span>
    </div>

    <div class="mb-1">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="text" class="form-control" id="password" name="alumno[password]" value="" placeholder="Contraseña Alumno(a)" required>
        <span class="invalid-feedback">Escribe la Contraseña.</span>
    </div>
</fieldset>

