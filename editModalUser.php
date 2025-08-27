<div class="modal fade" id="editModalUser" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalUserLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm1" action="/alienstage/pages/edits/editUser.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="IdWeb" id="editIdWeb">
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
                                <label for="editNombre1" class="form-label"><strong>Nombre</strong></label>
                                <input type="text" class="form-control" id="editNombre1" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editapellido1" class="form-label"><strong>Apellido</strong></label>
                                <input type="text" class="form-control" id="editapellido1" name="apellido" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editTelefono" class="form-label"><strong>Teléfono</strong></label>
                                <input type="text" class="form-control" id="editTelefono" name="telefono" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editCodigo1" class="form-label"><strong>Código</strong></label>
                                <input type="text" class="form-control" id="editCodigo1" name="codigo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editEstatus1" class="form-label"><strong>Estatus</strong></label>
                                <select class="form-select" id="editEstatus1" name="estatus" required>
                                    <option value="">Selecciona un estatus</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Activo">Activo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editFecha" class="form-label"><strong>Fecha</strong></label>
                                <input type="date" class="form-control" id="editFecha" name="fecha" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
