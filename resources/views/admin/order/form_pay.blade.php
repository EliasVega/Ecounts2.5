<div class="box-body row">
    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group" id="fpay">
            <label for="payment_form_id">F/Pago</label>
            <select name="payment_form_id" class="form-control selectpicker" id="payment_form_id"
                data-live-search="true" required>
                <option value="" disabled selected>Seleccionar...</option>
                @foreach($payment_forms as $pf)
                <option value="{{ $pf->id }}">{{ $pf->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12" id="mpay">
        <div class="form-group">
            <label for="payment_method_id">Med/pago</label>
            <select name="payment_method_id" class="form-control selectpicker" id="payment_method_id"
                data-live-search="true" required>
                <option value="" disabled selected>Seleccionar...</option>
                @foreach($payment_methods as $pm)
                <option value="{{ $pm->id }}">{{ $pm->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="addpayment">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="addpay" data-toggle="tooltip" data-placement="top" title="Desea Agregar Abono">Agregar abono </button>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="cash" data-toggle="tooltip" data-placement="top" title="Efectivo">Efectivo</button>
        </div>
    </div>
    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="transfer" data-toggle="tooltip" data-placement="top" title="Transferencia">Transferencia</button>
        </div>
    </div>
    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="nequi" data-toggle="tooltip" data-placement="top" title="Nequi">Nequi</button>
        </div>
    </div>
    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="card1" data-toggle="tooltip" data-placement="top" title="Tarjetas">T/Credito</button>
        </div>
    </div>
    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="card2" data-toggle="tooltip" data-placement="top" title="Tarjetas">T/Debito</button>
        </div>
    </div>
    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="noDefined" data-toggle="tooltip" data-placement="top" title="Metodo no definido">Indefinido </button>
        </div>
    </div>
    <div class="col-lg- col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <button class="btn btn-celeste btn-sm" type="button" id="advanceCus" data-toggle="tooltip" data-placement="top" title="Anticipo">Anticipo</button>
        </div>
    </div>

    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <label class="form-control-label">
                <strong>Agregar Abono</strong>
            </label>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="balance">Total Factura</label>
            <input type="number" id="balance" name="balance" value="0" class="form-control gris" disabled pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="balancy">
        <div class="form-group">
            <label class="form-control-label" for="returned">Saldo</label>
            <input type="number" id="returned" name="returned" value="0"
                class="form-control gris" disabled pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="payi">
        <div class="form-group">
            <label class="form-control-label requerido" for="pay">Abono</label>
            <input type="number" id="pay" name="pay" value="0"
                class="form-control blanco" placeholder="pay" pattern="[0-9]{0,15}">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="abadvancey">
        <div class="form-group">
            <label class="form-control-label requerido" for="abpayment">Anticipo</label>
            <input type="number" id="abpayment" name="abpayment"
                class="form-control blanco" placeholder="valor" pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="abvto">
        <div class="form-group">
            <label class="form-control-label" for="advance">Abono +</label>
            <input type="number" id="advance" name="advance"
                class="form-control blanco" placeholder="valor" pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="transactiony">
        <div class="form-group">
            <label class="form-control-label" for="transaction">#Transaccion</label>
            <input type="text" id="transaction" name="transaction"
                class="form-control" placeholder="Operacion">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="banky">
        <div class="form-group">
            <label class="requerido" for="bank_id">Bancos</label>
            <select name="bank_id" class="form-control selectpicker" id="bank_id"
                data-live-search="true">
                <option value="" disabled selected>Seleccionar...</option>
                @foreach($banks as $ban)
                <option value="{{ $ban->id }}">{{ $ban->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="cardy">
        <div class="form-group">
            <label for="card_id">Tipo Tarjeta</label>
            <select name="card_id" class="form-control selectpicker" id="card_id"
                data-live-search="true">
                <option value="" disabled selected>seleccionar...</option>
                @foreach($cards as $car)
                <option value="{{ $car->id }}">{{ $car->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="advancey">
        <div class="form-group">
            <label for="advance_id">Pago Anticipado</label>
            <select name="advance_id" class="form-control" id="advance_id">
                <option value ="" disabled selected>Seleccionar...</option>
            </select>
        </div>
    </div>


</div>
