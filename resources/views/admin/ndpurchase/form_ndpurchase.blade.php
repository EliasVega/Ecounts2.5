<div class="box-body row">

    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12">
        <div class="form-group">
            <label for="supplier_id">Id_Prov.</label>
            <input type="text" name="supplier_id" value="{{ $purchases->idS }}"
                class="form-control" placeholder="" readonly>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">
        <div class="form-group">
            <label for="">Proveedor</label>
            <input type="text" name="" value="{{ $purchases->name }}"
                class="form-control" placeholder="" readonly>
        </div>
    </div>

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label class="form-control-label" for="nc_discrepancy_id">Motivo Nota Credito</label>
                <select name="nc_discrepancy_id" class="form-control selectpicker" id="nc_discrepancy_id" data-live-search="true">
                    <option value="0" disabled selected>Seleccionar...</option>
                    @foreach($discrepancies as $dis)
                        <option value="{{ $dis->id }}">{{ $dis->description }}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="clearfix"></div>

