<!-- Modal para responder -->
<div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> <!-- Cambiado a modal-lg para más ancho -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="responseModalLabel">Responder al Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="responseForm" method="POST" action="/alienstage/pages/insertResponse.php">
          <div class="mb-3">
            <label for="numeroReporte" class="form-label"><strong>Número de Reporte</strong></label>
            <input type="text" class="form-control" id="numeroReporte" name="numeroReporte" readonly>
          </div>
          <div class="mb-3">
            <label for="fecha" class="form-label"><strong>Fecha</strong></label>
            <input type="text" class="form-control" id="fecha" name="fecha" readonly value="<?php echo date('d/m/Y'); ?>">
          </div>
          <div class="mb-3">
            <label for="tecnicoNombre" class="form-label"><strong>Nombre del Técnico</strong></label>
            <input type="text" class="form-control" id="tecnicoNombre" name="tecnicoNombre" readonly value="<?php echo $_SESSION['nombre']; ?>">
          </div>
          <div class="mb-3">
            <label for="descrpSolucion" class="form-label"><strong>Descripción de la Solución</strong></label>
            <textarea class="form-control" id="descrpSolucion" name="descrpSolucion" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="estatus" class="form-label"><strong>Estatus</strong></label>
            <select class="form-select" id="estatus" name="estatus" required>
              <option value="Pendiente">Pendiente</option>
              <option value="Solucionado">Solucionado</option>
              <option value="En proceso">En proceso</option>
              <option value="Cancelado">Cancelado</option>
            </select>
          </div>
          <input type="hidden" id="idSoporte" name="idSoporte">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="responseForm">Guardar Respuesta</button>
      </div>
    </div>
  </div>
</div>