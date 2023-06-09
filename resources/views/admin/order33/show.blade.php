@extends('layouts.admin')
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
    <main class="main">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="company">RESPONSABLE</label>
                    <h6>{{ $order->customer->name }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="company">SUCURSAL</label>
                    <h6>{{ $order->branch->name }}</h6>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="paymentForm">FORMA DE PAGO</label>
                    <h6>{{ $order->paymentForm->name }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="paymentMethod">MEDIO DE PAGO</label>
                    <h6>{{ $order->paymentMethod->name }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="nombre">CLIENTE</label>
                    <h6>{{ $order->customer->name }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="invoice">FACTURA No.</label>
                    <h6>{{ $order->id }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="Fecha">FECHA EMISION</label>
                    <h6>{{ $order->created_at }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="due_date">VENCE</label>
                    <h6>{{ $order->due_date }}</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label class="form-control-label" for="company">RESPONSABLE</label>
                    <h6>{{ $order->user->name }}</h6>
                </div>
            </div>
        </div><br>
        <div class="box-body row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <h5>Detalle de la orden de pedido
                            <a href="{{ route('order.index') }}" class="btn btn-gris"><i
                                    class="fas fa-undo-alt mr-2"></i>Regresar</a>
                        </h5>
                    </div>
                </div>
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
                                    <th><p align="right">${{ number_format($order->total, 2) }}</p></th>
                                </tr>

                                <tr>
                                    <th colspan="3"><p align="right">TOTAL IVA:</p></th>
                                    <th><p align="right">${{ number_format($order->total_iva, 2) }}</p></th>
                                </tr>

                                <tr>
                                    <th colspan="3"><p align="right">RETENCION:</p></th>
                                    <th><p align="right">${{ number_format($order->retention, 2) }}</p></th>
                                </tr>

                                <tr>
                                    <th  colspan="3"><p align="right">TOTAL PAGAR:</p></th>
                                    <th><p align="right">${{ number_format($order->total_pay, 2) }}</p></th>
                                </tr>

                            </tfoot>
                            <tbody>
                                @foreach ($order_products as $op)
                                    <tr>
                                        <td>{{ $op->product->name }}</td>
                                        <td>${{ $op->price }}</td>
                                        <td class="tdder">{{ $op->quantity }}</td>
                                        <td class="tdder">{{ number_format($op->subtotal, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
