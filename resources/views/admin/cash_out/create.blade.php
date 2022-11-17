@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Entregando Efectivo</h3>
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
            <form action="{{route('cash_out.store')}}" method="POST">
                {{csrf_field()}}
                <div class="box-body row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" id="valorcito">
                            <label class="form-control-label" for="payment">Efectivo Entregar</label>
                            <input type="number" id="payment" name="payment" value="" class="form-control"
                                placeholder="Efectivo" pattern="[0-9]{0,15}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" id="cajetilla">
                            <label class="form-control-label" for="boxy">Efectivo Caja</label>
                            <input type="number" id="boxy" name="boxy" value="{{ $cash }}" class="form-control"
                                placeholder="Efectivo" disabled pattern="[0-9]{0,15}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="admin_id">Admin Recibe Efectivo</label>
                            <select name="admin_id" class="form-control selectpicker" id="admin_id"
                                data-live-search="true">
                                <option value="" disabled selected>Seleccionar....</option>
                                @foreach($users as $use)
                                <option value="{{ $use->id }}">{{ $use->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" id="valorcito">
                            <label class="form-control-label" for="admin">Codigo de verificacion</label>
                            <input type="password" id="admin" name="admin" value="" class="form-control"
                                placeholder="Codigo Verificacion">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" id="save">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Aceptar</button>
                            <a href="{{url('cashOut')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
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

        $(document).ready(function(){
            $("#payment").blur(function(){
                valuing();
                assess();
            });
        });

        $(document).ready(function(){
            $("#admin_id").click(function(){
                assign();
            });
        });
        valor = 0;
        admin = "";
        $("#save").hide();

    function valuing(){

        boxy = $("#boxy").val();
        payment = $("#payment").val();
        if(payment > boxy){
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El valor a retirar de caja supera la cantidad existente',
            })
            $("#payment").val("")
        }
    }
    function assign(){
        payment = $("#payment").val();


        if(payment <= 0 || payment == ""){
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Primero debes digitar la cantidad a Retirar',
            })
        }
    }

    function assess(){

        if(payment>0){
            $("#save").show();
        } else{
            $("#save").hide();
        }
    }
</script>

@endsection