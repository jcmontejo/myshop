<!--<div class="modal-body">-->
<div class="container">
    <div class='row'>
        <div class="col-md-12">
            <h4 class="modal-title my-modal-label">Por favor introduce los datos de tu tarjeta</h4>
        </div>
        <div class='col-md-4 col-xs-2'></div>
        <div class='col-md-4 col-xs-8'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <div class='form-row'>
                <div class='col-xs-12 form-group required'>
                    <label class='control-label'>Nombre en la Tarjeta</label>
                    <input class='form-control' size='4' type='text'>
                </div>
            </div>
            <div class='form-row'>
                <div class='col-xs-12 form-group card required'>
                    <label class='control-label'>Número de Tarjeta</label>
                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                </div>
            </div>
            <div class='form-row'>
                <div class='col-xs-4 form-group cvc required'>
                    <label class='control-label'>CVC</label>
                    <input autocomplete='off' class='form-control card-cvc' placeholder='ej. 311' size='4' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                    <label class='control-label'>Expiración</label>
                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                    <label class='control-label'> </label>
                    <input class='form-control card-expiry-year' placeholder='AAAA' size='4' type='text'>
                </div>
            </div>
            <div class='form-row'>
                <div class='col-md-12'>
                    <div class='form-control total btn btn-info standard-button'>
                        Total:
                        <span class='amount'>${{number_format($total)}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--end modal-body-->
</div>
</div>
</div>