<div class="container-xl p-2 d-grid gap-2">
    <h2 class="text-center">Bachillerato</h2>
    <?php foreach ($bachillerato_opciones as $bachillerato) : ?>
        
        <h3 class="w-100 m-0 p-1 bg-primary text-white">Bachillerato <?php echo utf8_encode($bachillerato->nombre); ?></h3>
        <div class="container-xl border-bottom">
            <p><?php echo $bachillerato->descripcion ?></p>
            <h4>Perfil de Egreso</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quasi adipisci sunt laudantium fugit consectetur animi rem. Soluta doloribus placeat nam? Eveniet neque corporis pariatur molestiae aperiam? Quos, vel assumenda?</p>
            <button type="button" class="btn btn-info text-white mb-1 p-1" data-bs-toggle="modal" data-bs-target="#psicologia-horarios">Ver horarios</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="psicologia-horarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-1">
                        <h5 class="modal-title" id="exampleModalLabel">Horarios Bachillerato <?php echo utf8_encode($bachillerato->nombre); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body table-responsive p-1">
                        <table class="table table-bordered table-warning table-striped table-sm text-center mb-1">
                            <thead>
                                <tr>
                                    <th scope="col">Lunes</th>
                                    <th scope="col">Martes</th>
                                    <th scope="col">Miercoles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>12:00</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>16:00</td>
                                    <td></td>
                                    <td>16:00</td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td>20:00</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-warning table-striped table-sm text-center mb-1">
                            <thead>
                                <tr>
                                    <th scope="col">Jueves</th>
                                    <th scope="col">Viernes</th>
                                    <th scope="col">Sábado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12:00</td>
                                    <td>12:00</td>
                                    <td>12:00</td>
                                </tr>
                                <tr>
                                    <td>16:00</td>
                                    <td>16:00</td>
                                    <td>16:00</td>
                                </tr>
                                <tr>
                                    <td>20:00</td>
                                    <td></td>
                                    <td>20:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer p-1">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="cita" class="btn btn-primary">Agendar Cita</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
