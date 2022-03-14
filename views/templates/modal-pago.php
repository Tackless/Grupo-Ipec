<!-- Modal -->
<div class="modal fade" id="modalPago" tabindex="-1" aria-labelledby="Modal Pago" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-header p-1">
                    <h5 class="modal-title" id="ModalNuevoPago">Nuevo Pago </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center">
                    <fieldset>
                        <div class="m-1">
                            <label class="form-label" for="fecha-pago-inicio">Fecha Inicial: </label>
                            <input class="form-control" type="date" id="fecha-pago-inicio" name="pago[fechaInicio]" required>
                            <span class="invalid-feedback">Elige una Fecha Válida.</span>
                        </div>
                        <div class="m-1">
                            <label class="form-label" for="fecha-pago-fin">Fecha Final: </label>
                            <input class="form-control" type="date" id="fecha-pago-fin" name="pago[fechaFin]" required>
                            <span class="invalid-feedback">Elige una Fecha Válida.</span>
                        </div>
                        <div class="m-1">
                            <label for="pagoEstatus" class="form-label">Estatus: </label>
                            <select class="form-select" id="pagoEstatus" name="pago[estatus]" required>
                                <option selected disabled value="">--Seleccionar--</option>
                                <option value="1">PAGADO</option>
                                <option value="2">RETRASADO</option>
                                <option value="3">PENDIENTE</option>
                            </select>
                            <span class="invalid-feedback">Elige una opción.</span>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer p-1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="hidden" name="pago[alumnoId]" value="<?php echo $alumno->id ?>">
                    <input type="submit" class="btn btn-success" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>