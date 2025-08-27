<!-- Modal para agregar nuevo servicio -->
<div class="modal fade" id="nuevoServicioModal" tabindex="-1" aria-labelledby="nuevoServicioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nuevoServicioModalLabel">Agregar Nuevo Servicio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formNuevoServicio">
          <div class="mb-3">
            <label for="nombreServicio" class="form-label">Nombre del Servicio</label>
            <input type="text" class="form-control" id="nombreServicio" required>
          </div>
          <div class="mb-3">
            <label for="numeroAgregados" class="form-label">Número de Agregados</label>
            <input type="number" class="form-control" id="numeroAgregados" required>
          </div>
          <button type="submit" class="btn btn-primary">Agregar Servicio</button>
        </form>
      </div>
    </div>
  </div>
</div>
