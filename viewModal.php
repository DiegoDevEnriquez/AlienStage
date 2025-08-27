<!-- Modal para ver detalles -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg"> <!-- Cambiado a modal-lg para más ancho -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">Detalles del Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nombre:</strong> <span id="viewNombre"></span></p>
        <p><strong>Apellido:</strong> <span id="viewApellido"></span></p>
        <p><strong>Correo:</strong> <span id="viewCorreo"></span></p>
        <p><strong>Situación:</strong> <span id="viewSituacion"></span></p>
        <p><strong>Descripción:</strong> <span id="viewDescripcion"></span></p>
        <p><strong>Fecha:</strong> <span id="viewFecha"></span></p>
        <p><strong>Evidencia:</strong></p>
        <img id="viewEvidencia" src="" class="img-fluid" alt="Evidencia">
        <p><strong>Estatus:</strong> <span id="viewEstatus"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#responseModal">Responder</button>
      </div>
    </div>
  </div>
</div>
