<!-- Modal de agregar nuevos equipos-->
<div class="modal fade" id="insertModalUser" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalUserLabel">Agregar Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/Insertar_Usuario.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="apellido" class="form-label"><strong>Apellido</strong></label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="codigo" class="form-label"><strong>Código</strong></label>
                                <input type="text" class="form-control" id="codigo" name="codigo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tipo" class="form-label"><strong>Tipo</strong></label>
                                <select class="form-select" id="tipo" name="tipo" required>
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
                                <label for="estatus" class="form-label"><strong>Estatus</strong></label>
                                <select class="form-select" id="estatus" name="estatus" required>
                                    <option value="">Selecciona un estatus</option>
                                    <option value="Nuevo">Nuevo</option>
                                    <option value="Usado">Usado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="color" class="form-label"><strong>Color</strong></label>
                                <input type="text" class="form-control" id="color" name="color" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="peso" class="form-label"><strong>Peso (kg)</strong></label>
                                <input type="text" class="form-control" id="peso" name="peso" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tamaño" class="form-label"><strong>Tamaño</strong></label>
                                <select class="form-select" id="tamaño" name="tamaño" required>
                                    <option value="">Selecciona un tamaño</option>
                                    <option value="Pequeño">Pequeño</option>
                                    <option value="Mediano">Mediano</option>
                                    <option value="Alto">Alto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cantidad" class="form-label"><strong>Cantidad</strong></label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="imagen" class="form-label"><strong>Imagen</strong></label>
                                <input type="file" class="form-control" id="imagen" name="imagen" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Equipo</button>
                </form>
            </div>
        </div>
    </div>
</div>
