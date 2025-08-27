<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Equipo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="/alienstage/pages/edits/edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idEquipo" id="editIdEquipo">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editNombre" class="form-label"><strong>Nombre</strong></label>
                                <input type="text" class="form-control" id="editNombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editCodigo" class="form-label"><strong>Código</strong></label>
                                <input type="text" class="form-control" id="editCodigo" name="codigo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editTipo" class="form-label"><strong>Tipo</strong></label>
                                <select class="form-select" id="editTipo" name="tipo" required>
                                    <option value="">Selecciona un tipo</option>
                                    <option value="Iluminacion">Iluminación</option>
                                    <option value="Sonido">Sonido</option>
                                    <option value="Entretenimiento">Entretenimiento</option>
                                    <option value="Imagen">Imagen</option>
                                    <option value="Vestimenta">Vestimenta</option>
                                    <option value="Soportes">Soportes</option>
                                    <option value="Bases">Bases</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editEstatus" class="form-label"><strong>Estatus</strong></label>
                                <select class="form-select" id="editEstatus" name="estatus" required>
                                    <option value="">Selecciona un estatus</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Usado">Usado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editColor" class="form-label"><strong>Color</strong></label>
                                <input type="text" class="form-control" id="editColor" name="color" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editPeso" class="form-label"><strong>Peso (kg)</strong></label>
                                <input type="text" class="form-control" id="editPeso" name="peso" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editTamaño" class="form-label"><strong>Tamaño</strong></label>
                                <select class="form-select" id="editTamaño" name="tamaño" required>
                                    <option value="">Selecciona un tamaño</option>
                                    <option value="Pequeño">Pequeño</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Alto">Alto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="editCantidad" class="form-label"><strong>Cantidad</strong></label>
                                <input type="number" class="form-control" id="editCantidad" name="cantidad" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="editImagen" class="form-label"><strong>Imagen</strong></label>
                                <input type="file" class="form-control" id="editImagen" name="imagen">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
