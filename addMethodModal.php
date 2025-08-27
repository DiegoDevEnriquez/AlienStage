<!-- Modal para agregar un método de pago -->
<div class="modal fade" id="addMethodModal" tabindex="-1" role="dialog" aria-labelledby="addMethodModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMethodModalLabel">Agregar Método de Pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="paymentMethod">Selecciona un Método de Pago</label>
                        <select class="form-control" id="paymentMethod">
                            <option value="mastercard">Mastercard</option>
                            <option value="visa">Visa</option>
                            <option value="mercadopago">Mercado Pago</option>
                            <option value="googlepay">Google Pay</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="addPaymentMethod()">Agregar</button>
                </div>
            </div>
        </div>
    </div>