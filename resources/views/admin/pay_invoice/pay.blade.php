<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
    <div class="box-danger">
        <label class="form-control-label">
            <h4>Agregar Abonos</h4>
        </label>
    </div>
</div>

<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <div class="form-group">
        <button class="btn btn-success" type="button" id="add"><i class="fa fa-save"></i>&nbsp; Agregar Abono</button>
        <a href="{{url('pay_invoice')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
        <table id="details" class="table table-striped table-bordered table-condensed table-hover">
            <thead class="bg-info">
                <tr>
                    <th>Eliminar</th>
                    <th>Medio</th>
                    <th>T. Tarjeta</th>
                    <th>Entidad</th>
                    <th>Transaccion o Documento</th>
                    <th>Abono</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL:</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_html">$ 0.00</span>
                            <input type="hidden" name="total" id="total"> </p>
                    </th>
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
