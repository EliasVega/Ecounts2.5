<div class="box-body row">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="customer_id">Cliente</label>
            <select name="customer_id" class="form-control selectpicker" id="customer_id"
                data-live-search="true" required>
                <option value="" disabled selected>Seleccionar el Cliente</option>
                @foreach($customers as $cus)
                <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="due_date">Vencimiento</label>
            <input type="date" name="due_date" class="form-control" placeholder="Fecha Vencimiento">
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group" id="fpago">
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
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group" id="mpay">
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
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="box-danger">
            <label class="form-control-label">
                <h4>Agregar Productos</h4>
            </label>
        </div>
    </div>

    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group" id="idPro">
            <label class="form-control-label" for="idP">ID Producto</label>
            <input type="number" id="idP" name="idP" class="form-control" placeholder="Id Prod." disabled
                pattern="[0-9]{0,15}">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
        <div class="form-check">
            <input class="form-check-input" type="radio" name="retention" value="1" id="rtfon">
            <label class="form-check-label" for="retefte">
                Retenciones
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="retention" value="0" id="rtfoff" checked>
            <label class="form-check-label" for="retefte">
                No Retenciones
            </label>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="form-group row" id="retentiony">
            <label class="form-control-label" for="retention_id">Retention</label>
            <select name="retention_id" class="form-control selectpicker" id="retention_id"
                data-live-search="true">
                <option value="0" disabled selected>Selecionar..</option>
                @foreach($retentions as $ret)
                <option
                    value="{{ $ret->id }}_{{ $ret->porcentage }}">
                    {{ $ret->porcentage }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="precio">P/sugerido</label>
            <input type="number" id="suggested_price" name="pricesug" class="form-control"
                placeholder="Precio sugerido" disabled>
        </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" class="form-control"
                placeholder="stock" disabled pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="iva">Iva</label>
            <input type="number" id="iva" name="iva" class="form-control" placeholder="Iva" disabled
                pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
        <div class="form-group" id="porcent">
            <label class="form-control-label" for="porcentage">% Ret</label>
            <input type="number" id="porcentage" name="porcentage" value="0" class="form-control"
                placeholder="V impuesto" disabled >
        </div>
    </div>
    <div class="clearfix">

    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label class="form-control-label" for="product_id">Producto</label>
            <select name="product_id" class="form-control selectpicker" id="product_id"
                data-live-search="true">
                <option value="0" disabled selected>Seleccionar el Producto</option>
                @foreach($branch_products as $bp)
                <option
                    value="{{ $bp->id }}_{{ $bp->stock }}_{{ $bp->sale_price }}_{{ $bp->iva }}_{{ $bp->idP }}">
                    {{ $bp->name }}--{{ $bp->stock }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="sale_price">Precio</label>
            <input type="number" id="sale_price" name="sale_price" class="form-control"
                placeholder="Precio de venta">
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="quantity">Cantidad</label>
            <input type="number" id="quantity" name="quantity" value=""
                class="form-control" placeholder="Cantidad" pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
        <div class="form-group">
            <label class="form-control-label">Add</label><br>
            <button class="btn btn-grisb" type="button" id="add" data-toggle="tooltip" data-placement="top" title="Add"><i class="fas fa-check"></i>&nbsp; </button>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" >Canc</label><br>
            <a href="{{url('order')}}" class="btn btn-grisb" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="fa fa-window-close"></i>&nbsp; </a>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="details" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Eliminar</th>
                        <th>Id</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>precio ($)</th>
                        <th>iva ($)</th>
                        <th>SubTotal ($)</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="6" class="footder">TOTAL:</th>
                        <td class="footder"><strong id="total_html">$ 0.00</strong>
                            <input type="hidden" name="total" id="total"></td>
                    </tr>
                    <tr>
                        <th colspan="6" class="footder">TOTAL IVA:</th>
                        <td class="footder"><strong id="total_iva_html">$ 0.00</strong>
                            <input type="hidden" name="total_iva" id="total_iva">
                        </td>
                    </tr>
                    <tr id="rtferase">
                        <th colspan="6" class="footder">RETENCION:</th>
                        <td class="footder"><strong id="retention_html">$ 0.00</strong>
                            <input type="hidden" name="retention" id="retencion"></td>
                    </tr>
                    <tr>
                        <th colspan="6" class="footder">TOTAL PAGAR:</th>
                        <td class="footder"><strong id="total_pay_html">$ 0.00</strong>
                            <input type="hidden" name="total_pay" id="total_pay"></td>
                    </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer" id="save">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group row">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>&nbsp;
                    Registrar</button>
            </div>
        </div>
    </div>
</div>
