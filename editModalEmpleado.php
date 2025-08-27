<div class="modal fade" id="editModalEmpleado" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalEmpleadoLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm1" action="/alienstage/pages/edits/editEmpleado.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="IdUsuario" id="editIdUsuario">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editCorreo" class="form-label"><strong>Correo</strong></label>
                                <input type="email" class="form-control" id="editCorreo" name="correo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editContraseña" class="form-label"><strong>Contraseña</strong></label>
                                <input type="password" class="form-control" id="editContraseña" name="contraseña" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editNombre" class="form-label"><strong>Nombre</strong></label>
                                <input type="text" class="form-control" id="editNombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editApellido" class="form-label"><strong>Apellido</strong></label>
                                <input type="text" class="form-control" id="editApellido" name="apellido" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editCodigo" class="form-label"><strong>Código</strong></label>
                                <input type="text" class="form-control" id="editCodigo" name="codigo" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
