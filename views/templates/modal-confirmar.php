<!-- Modal -->
<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="Modal Eliminar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header p-1">
                <h5 class="modal-title" id="ModalEliminarAlumno">¿Eliminar Alumno?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-dark fs-5">Esta acción es irreversible.</p>
            </div>
            <div class="modal-footer p-1 d-flex justify-content-between"> 
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" class="" action="/gestion/eliminar">
                    <input type="hidden" name="id" value="<?php echo $alumno->id; ?>">
                    <input type="submit" class="btn btn-danger " value="Eliminar">
                </form>
            </div>
        </div>
    </div>
</div>