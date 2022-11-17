@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h2>Agregar Abono</h2>
            </div>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('pay_purchase.store')}}" method="POST">
                {{csrf_field()}}
                <div class="box-body row">

                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label">Compra #</label>
                            <input type="number" value="{{ $purchases->id }}" class="form-control" disabled pattern="[0-9]{0,15}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label">Proveedor</label>
                            <input type="text" value="{{ $purchases->name }}" class="form-control" disabled pattern="[0-9]{0,15}">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha</label>
                            <input type="text" value="{{ $purchases->created_at }}" class="form-control" disabled pattern="[0-9]{0,15}">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label">Pendiente</label>
                            <input type="number" id="pendient" value="{{ $purchases->balance }}" class="form-control" disabled pattern="[0-9]{0,15}">
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
                            <a href="{{url('pay_purchase')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table id="details" class="table table-striped table-bordered table-condensed table-hover">
                                <thead class="bg-info">
                                    <tr>
                                        <th>Eliminar</th>
                                        <th>Medio</th>
                                        <th>T. card</th>
                                        <th>Entidad</th>
                                        <th>Transaccion</th>
                                        <th>payment</th>
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
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#paymentMethod_id').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });

        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#bank_id').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#card_id').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });

        $(document).ready(function(){
            $("#add").click(function(){
                add();
            });
        });

        $(document).ready(function(){
            $("#payment_method_id").change(function(){
            method = $("#payment_method_id").val();
            if(method == 1){
                payCash();
            }else{
                everyPay();
            }
            });
        });

        $(document).ready(function(){
            $("#pay").keyup(function(){
                $("#pay").val();
                payment();
            });
        });

        var cont=0;
        total=0;
        $("#save").hide();
        $("#banky").hide();
        $("#cardy").hide();
        $("#transactiony").hide();

        function add(){

            payment_method_id = $("#payment_method_id").val();
            payment_method    = $("#payment_method_id option:selected").text();
            bank_id     = $("#bank_id").val();
            bank        = $("#bank_id option:selected").text();
            card_id   = $("#card_id").val();
            card      = $("#card_id option:selected").text();
            pay        = $("#pay").val();
            transaction  = $("#transaction").val();
            pendient    = $("#pendient").val();

            if(payment_method_id == 1){
                bank_id    = 1;
                bank       = 'N/A';
                card_id  = 1;
                card     = 'N/A';
                transaction = 'Efectivo'
            }
            if(payment_method_id != 2){
                card_id  = 1;
                card     = 'N/A';
            }

            if(payment_method_id !="" && bank_id!="" && card_id!=""  && pay!="" && pay>0 && transaction!=""){

                total = parseFloat(total) + parseFloat(pay);
                rbalance = parseFloat(pendient)-total;
                pendient = parseFloat(pendient);

                if (pendient >= total) {
                    var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="payment_method_id[]" value="'+payment_method_id+'">'+payment_method+'</td> <td><input type="hidden" name="card_id[]" value="'+card_id+'">'+card+'</td> <td><input type="hidden" name="bank_id[]" value="'+bank_id+'">'+bank+'</td> <td><input type="hidden" name="transaction[]" value="'+transaction+'">'+transaction+'</td> <td><input type="hidden" name="pay[]" value="'+pay+'">'+pay+'</td>  </tr>';
                    cont++;

                    totals();
                    assess();
                    $('#details').append(fila);
                    clean();
                } else {
                    total = parseFloat(total) - parseFloat(pay);
                    //alert("Rellene todos los campos del detalle de la venta");
                    Swal.fire({
                        type: 'error',
                        //title: 'Oops...',
                        text: 'Abono supera el saldo del Compra',
                    });
                }
            } else {
                //alert("Rellene todos los campos del detalle de la venta");
                Swal.fire({
                type: 'error',
                //title: 'Oops...',
                text: 'Rellene todos los campos del detalle de la Compra',
                });
            }
        }
        function clean(){
            $("#payment_method_id").val("");
            $("#bank_id").val("");
            $("#card_id").val("");
            $("#pay").val("");
            $("#transaction").val("");
        }
        function totals(){

            $("#total_html").html("$ " + total.toFixed(2));
            $("#total").val(total.toFixed(2));
            $("#pendient").val(rbalance);
        }
        function assess(){

            if(total>0){

            $("#save").show();

        } else{

            $("#save").hide();
        }
    }
    function eliminar(index){

        total = total-pay[index];

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        $("#fila" + index).remove();
        assess();
    }
    function payCash(){
        $("#banky").hide();
        $("#cardy").hide();
        $("#transactiony").hide();
    }

    function everyPay(){
        $("#banky").show();
        $("#cardy").show();
        $("#transactiony").show();
        $("#pay_eventy").show();
    }
    function payment(){
        ttp = parseFloat($("#pendient").val())
        abn = parseFloat($("#pay").val())
        balancey = ttp - abn;
        if (ttp >= abn) {
            $("#rbalance").val(balancey);
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El abono supera el valor de la Compra',
            })
            $("#pay").val(0)
            payment();
        }
    }

</script>
@endsection
