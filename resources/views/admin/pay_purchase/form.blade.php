<div class="box-body row">
    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label requerido" for="purchase">Compra #</label>
            <input type="number" value="{{ $purchase->id }}" id="purchase" name="purchase"
                class="form-control blanco" disabled pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label class="form-control-label">Proveedor</label>
            <input type="text" value="{{ $purchase->supplier->name }}" class="form-control" disabled pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label class="form-control-label">Pendiente</label>
            <input type="number" id="pendient" value="{{ $purchase->balance }}" class="form-control" disabled pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <label class="form-control-label">Fecha</label>
            <input type="text" value="{{ $purchase->created_at }}" class="form-control" disabled pattern="[0-9]{0,15}">
        </div>
    </div>

</div>
