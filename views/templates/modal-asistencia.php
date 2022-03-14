<!-- Modal -->
<div class="modal fade" id="modalAsistencia" tabindex="-1" aria-labelledby="Modal Asistencia" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-header p-1">
                    <h5 class="modal-title" id="ModalNuevaAsistencia">Nueva Asistencia </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center">
                    <fieldset>
                        <div class="m-1">
                            <label class="form-label" for="fecha-asistencia">Fecha: </label>
                            <input class="form-control" type="date" id="fecha-asistencia" name="asistencia[fecha]" required>
                            <span class="invalid-feedback">Elige una Fecha Válida.</span>
                        </div>
                        <div class="m-1">
                            <label for="plantel" class="form-label">Estatus: </label>
                            <select class="form-select" id="plantel" name="asistencia[estatus]" required>
                                <option selected disabled value="">--Seleccionar--</option>
                                <option>PRESENTE</option>
                                <option>AUSENTE</option>
                            </select>
                            <span class="invalid-feedback">Elige una opción.</span>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer p-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="hidden" name="asistencia[alumnoId]" value="<?php echo $alumno->id ?>">
                    <input type="submit" class="btn btn-success" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>