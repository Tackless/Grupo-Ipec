<!-- Modal -->
<div class="modal fade" id="modalBach" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header p-1">
                <h5 class="modal-title" id="exampleModalLabel">Modalidades Bachillerato </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body table-responsive p-1">
                <table class="table table-hover table-info table-striped mb-0">
                    <tbody>
                        <?php foreach ($bachillerato_opciones as $bachillerato) : ?>
                            <tr>
                                <th class="row"><a class="text-start text-dark p-1" href="bachillerato?id=<?php echo $bachillerato->id; ?>"><?php echo $bachillerato->nombre; ?></a></th>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer p-1">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>