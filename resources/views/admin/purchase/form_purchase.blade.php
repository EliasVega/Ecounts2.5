<div class="box-body row">

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label for="supplier_id">Proveedor  <button class="btn btn-codesR btn-sm" type="button" data-toggle="modal" data-target="#supplier"><i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar Proveedor</button></label>
            <select name="supplier_id" class="form-control selectpicker" id="supplier_id"
                data-live-search="true" required>
                <option value="" disabled selected>Seleccionar el Proveedor</option>
                @foreach($suppliers as $sup)
                <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="purchase">N°Factura</label>
            <input type="text" id="purchase" name="purchase" value="{{ old('purchase') }}" class="form-control" placeholder="Numero de la factura" required pattern="[0-9]{0,15}">
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="due_date">Vencimiento</label>
            <input type="date" name="due_date" class="form-control" placeholder="Fecha Vencimiento">
        </div>
    </div>
    <!--
    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
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
-->
    <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label class="form-control-label" for="branch_id">Sucursal Destino</label>
                <select name="branch_id" class="form-control selectpicker" id="branch_id" data-live-search="true">
                    <option value="0" disabled selected>Seleccionar Sucursal</option>
                    @foreach($branchs as $bra)
                        <option value="{{ $bra->id }}">{{ $bra->name }}</option>
                    @endforeach
                </select>
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
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
        <div class="form-group">
            <label for="vprice">V/Actual</label>
            <input type="number" name="vprice" id="vprice"  class="form-control" readonly>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-group row">
            <label class="form-control-label" for="product_id">Producto</label>
                <select name="product_id" class="form-control selectpicker" id="product_id" data-live-search="true">
                    <option value="0" disabled selected>Seleccionar el Producto</option>
                    @foreach($products as $pro)
                        <option value="{{ $pro->id }}_{{ $pro->iva }}_{{ $pro->stock }}_{{ $pro->price }}">{{ $pro->name }}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control"
                placeholder="Precio">
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="quantity">Cantidad</label>
            <input type="number" id="quantity" name="quantity" value=""
                class="form-control" placeholder="Cantidad" pattern="[0-9]{0,15}">
        </div>
    </div>
    <!--
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" for="price">Valor</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}"  class="form-control" placeholder="Precio de Compra" pattern="[0-9]{0,15}">
        </div>
    </div>-->
    <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
        <div class="form-group">
            <label class="form-control-label">Add</label><br>
            <button class="btn btn-grisb" type="button" id="add" data-toggle="tooltip" data-placement="top" title="Add"><i class="fas fa-check"></i>&nbsp; </button>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
        <div class="form-group">
            <label class="form-control-label" >Canc</label><br>
            <a href="{{url('invoice')}}" class="btn btn-grisb" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="fa fa-window-close"></i>&nbsp; </a>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="details" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Eliminar</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>precio ($)</th>
                        <th>iva (%)</th>
                        <th>SubTotal ($)</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="5" class="footder">TOTAL:</th>
                        <td class="footder"><strong id="total_html">$ 0.00</strong>
                            <input type="hidden" name="total" id="total"></td>
                    </tr>
                    <tr>
                        <th colspan="5" class="footder">TOTAL IVA:</th>
                        <td class="footder"><strong id="total_iva_html">$ 0.00</strong>
                            <input type="hidden" name="total_iva" id="total_iva">
                        </td>
                    </tr>
                    <tr>
                        <th colspan="5" class="footder">TOTAL PAGAR:</th>
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
