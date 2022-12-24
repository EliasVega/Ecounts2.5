<div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label class="form-control-label">Venta #</label>
        <input type="number" value="{{ $invoices->id }}" class="form-control" disabled pattern="[0-9]{0,15}">
    </div>
</div>

<div class="col-lg-6 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label class="form-control-label">Cliente</label>
        <input type="text" value="{{ $invoices->customer->name }}" class="form-control" disabled pattern="[0-9]{0,15}">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label class="form-control-label">Fecha</label>
        <input type="text" value="{{ $invoices->created_at }}" class="form-control" disabled pattern="[0-9]{0,15}">
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label class="form-control-label">Pendiente</label>
        <input type="number" id="pendient" value="{{ $invoices->balance }}" class="form-control" disabled pattern="[0-9]{0,15}">
    </div>
</div>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group" id="payi">
        <label class="form-control-label" for="pay">Abono</label>
        <input type="number" id="pay" name="pay" value="" class="form-control"
            placeholder="pago" pattern="[0-9]{0,15}">
    </div>
</div>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group" id="paymenty">
        <label class="form-control-label" >Saldo</label>
        <input type="number" id="rbalance"  value="" class="form-control" disabled pattern="[0-9]{0,15}">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="form-group row">
        <label for="payment_method_id">Medio de Pago</label>
        <select name="payment_method_id" class="form-control selectpicker" id="payment_method_id"
            data-live-search="true">
            <option value="" disabled selected>Seleccionar....</option>
            @foreach($payment_methods as $pm)
            <option value="{{ $pm->id }}">{{ $pm->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="form-group" id="pay_eventy">
        <label for="pay_event_id">Abono de Documento</label>
        <select name="pay_event_id" class="form-control selectpicker" id="pay_event_id"
            data-live-search="true">
            <option value="" disabled selected>seleccionar...</option>
            @foreach($pay_events as $pe)
            <option value="{{ $pe->id }}">{{ $pe->pay }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="form-group" id="banky">
        <label for="bank_id">bank</label>
        <select name="bank_id" class="form-control selectpicker" id="bank_id"
            data-live-search="true">
            <option value="1" disabled selected>seleccionar...</option>
            @foreach($banks as $ban)
            <option value="{{ $ban->id }}">{{ $ban->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="form-group" id="cardy">
        <label for="card_id">Tipo tarjeta</label>
        <select name="card_id" class="form-control selectpicker" id="card_id"
            data-live-search="true">
            <option value="1" disabled selected>seleccionar...</option>
            @foreach($cards as $car)
            <option value="{{ $car->id }}">{{ $car->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group" id="transactiony">
        <label class="form-control-label" for="transaction"># Transaccion</label>
        <input type="text" id="transaction" name="transaction" value="" class="form-control">
    </div>
</div>


