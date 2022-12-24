@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('order_product.store')}}" method="POST">
                {{csrf_field()}}
                <div class="box-body row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="customer_id">Cliente</label>
                            <input type="text" name="customer_id" class="form-control" value="{{ $orders->nameC }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="payment_form_id">Pago</label>
                            <input type="text" name="payment_form_id" class="form-control" value="{{ $orders->namePF }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="payment_method_id">Medio</label>
                            <input type="text" name="payment_method_id" class="form-control" value="{{ $orders->namePM }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="due_date">Vencimiento</label>
                            <input type="date" name="due_date" class="form-control" value="{{ $orders->due_date }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="total"></label>
                            <input type="text" name="total" id="total" class="form-control" value="{{ $orders->total }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="total_iva"></label>
                            <input type="text" name="total_iva" id="total_iva" class="form-control" value="{{ $orders->total_iva }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="total_pay"></label>
                            <input type="text" name="total_pay" id="total_pay" class="form-control" value="{{ $orders->total_pay }}" readonly>
                        </div>
                    </div>
                    @if ($orders->status == 'PENDIENTE')
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Facturar</button>
                            <a href="{{url('order')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a href="" class="btn btn-primary"><i class="fa fa-window-close"></i>&nbsp; Este order ya tiene una factura</a>
                            <a href="{{url('order')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                    @endif
                </div>
            </form>
            <div class="box-body row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Esta seguro de Facturar este order </h3>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <tr class="bg-info">
                                        <th>Producto</th>
                                        <th>Precio ($)</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tfoot>

                                    <tr>
                                        <th  colspan="3"><p align="right">TOTAL:</p></th>
                                        <th><p align="right">${{ $orders->total }}</p></th>
                                    </tr>

                                    <tr>
                                        <th colspan="3"><p align="right">TOTAL IVA:</p></th>
                                        <th><p align="right">${{ $orders->total_iva }}</p></th>
                                    </tr>

                                    <tr>
                                        <th  colspan="3"><p align="right">TOTAL PAGAR:</p></th>
                                        <th><p align="right">${{ $orders->total_pay }}</p></th>
                                    </tr>

                                </tfoot>
                                <tbody>
                                    @foreach($order_products as $op)
                                        <tr>
                                            <td>{{ $op->name }}</td>
                                            <td class="tdder">${{ $op->price }}</td>
                                            <td class="tdder">{{ $op->quantity }}</td>
                                            <td class="tdder">{{ $op->subtotal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/

        $("#total").hide();
        $("#total_iva").hide();
        $("#total_pay").hide();
</script>
@endsection
