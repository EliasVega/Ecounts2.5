@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <button class="btn btn-primary btn-md" type="button" data-toggle="modal" data-target="#abrirmodal">
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar Abono
                </button>
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
            <form action="{{route('payEvent.store')}}" method="POST">
                {{csrf_field()}}
                <div class="box-body row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group row">
                            <label for="paymentMethod_id">Medio de Pago</label>
                            <select name="paymentMethod_id" class="form-control selectpicker" id="paymentMethod_id"
                                data-live-search="true">
                                <option value="" disabled selected>Seleccionar....</option>
                                @foreach($paymentMethods as $pay)
                                <option value="{{ $pay->id }}">{{ $pay->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="form-group" id="paymenty">
                            <label class="form-control-label" for="payment">Valor</label>
                            <input type="number" id="payment" name="payment" value="" class="form-control"
                                placeholder="valor" pattern="[0-9]{0,15}">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group" id="banky">
                            <label for="bank_id">banco</label>
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
                            <label for="card_id">Tipo Tarjeta</label>
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
                        <div class="form-group" id="trans">
                            <label class="form-control-label" for="transaction"># transaction</label>
                            <input type="text" id="transaction" name="transaction" value="Efectivo" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group" id="payEve">
                            <label for="payEvent_id">Abono evento</label>
                            <select name="payEvent_id" class="form-control selectpicker" id="payEvent_id"
                                data-live-search="true">
                                <option value="" disabled selected>seleccionar...</option>
                                @foreach($payEvent as $pay)
                                <option value="{{ $pay->id }}">{{ $pay->pay }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="box-danger">
                            <label class="form-control-label">
                                <h4>Agregar Abonos</h4>
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-success" type="button" id="add"><i class="fa fa-save"></i>&nbsp; Agregar Abono</button>
                            <a href="{{url('payorder')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
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
                                        <th>transaction</th>
                                        <th>valor</th>
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
            $("#paymentMethod_id").change(function(){
            medio = $("#paymentMethod_id").val();
            if(medio == 1){
                paycash();
            }else{
                everyPay();
            }
            });
        });

        var cont=0;
        total=0;
        $("#save").hide();
        $("#payEven").hide();
        //$("#valorcito").hide();
        //$("#trans").hide();
        //$("#banquito").hide();
        //$("#tarjetica").hide();

        function agregar(){

            paymentMethod_id = $("#paymentMethod_id").val();
            paymentMethod    = $("#paymentMethod_id option:selected").text();
            bank_id     = $("#bank_id").val();
            bank        = $("#bank_id option:selected").text();
            card_id   = $("#card_id").val();
            card      = $("#card_id option:selected").text();
            valor        = $("#payment").val();
            transaction  = $("#transaction").val();

            if(paymentMethod_id == 1){
                bank_id    = 1;
                bank       = 'N/A';
                card_id  = 1;
                card     = 'N/A';
                transaction = 'Efectivo'
            }

            if(paymentMethod_id !="" && bank_id!="" && card_id!=""  && payment!="" && payment>0 && transaction!=""){

                total = parseFloat(total) + parseFloat(payment);

                    var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="paymentMethod_id[]" value="'+paymentMethod_id+'">'+paymentMethod+'</td> <td><input type="hidden" name="card_id[]" value="'+card_id+'">'+card+'</td> <td><input type="hidden" name="bank_id[]" value="'+bank_id+'">'+bank+'</td> <td><input type="hidden" name="transaction[]" value="'+transaction+'">'+transaction+'</td> <td><input type="hidden" name="valor[]" value="'+payment+'">'+payment+'</td>  </tr>';
                    cont++;

                    totals();
                    assess();
                    $('#details').append(fila);
                    clean();

            }else{

                //alert("Rellene todos los campos del detalle de la venta");

                Swal.fire({
                type: 'error',
                //title: 'Oops...',
                text: 'Rellene todos los campos del detalle del Abono',

                })

            }

        }


        function limpiar(){
            $("#paymentMethod_id").val("");
            $("#bank_id").val("");
            $("#card_id").val("");
            $("#payment").val("");
        }

        function totals(){

            $("#total_html").html("$ " + total.toFixed(2));
            $("#total").val(total.toFixed(2));
        }


        function assess(){

            if(total>0){

            $("#save").show();

        } else{

            $("#save").hide();
        }
    }

    function eliminar(index){

        total = total-valor[index];

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        $("#fila" + index).remove();
        evaluar();
    }
    function pagoefectivo(){
        $("#banky").hide();
        $("#cardy").hide();
        $("#trans").hide();
    }

    function otrospagos(){
        $("#banky").show();
        $("#cardy").show();
        $("#trans").show();
    }

</script>
@endsection
