<div class="modal fade" id="responseModal2" tabindex="-1" aria-labelledby="responseModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="responseModalLabel2">Responder Reseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertResponse2.php" method="post" id="responseForm2">
          <div class="mb-3">
            <label for="response-nota" class="form-label">Nota de Respuesta</label>
            <textarea class="form-control" id="response-nota" name="notarespuesta" required></textarea>
          </div>
          <div class="mb-3">
            <label for="response-estatus" class="form-label">Estatus</label>
            <select class="form-select" id="response-estatus" name="estatus" required>
              <option value="Respondida">Respondida</option>
              <option value="Borrada">Borrada</option>
            </select>
          </div>
          <input type="hidden" name="idReseña" id="response-idReseña">
          <button type="submit" class="btn btn-primary">Enviar Respuesta</button>
        </form>
      </div>
    </div>
  </div>
</div>
