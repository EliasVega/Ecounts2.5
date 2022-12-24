@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="company">RESPONSABLE</label>
                <h4>{{ $invoices->name }}</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="company">SUCURSAL</label>
                <h4>{{ $invoices->nameB }}</h4>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="paymentForm">FORMA DE PAGO</label>
                <h4>{{ $invoices->namePF }}</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="paymentMethod">MEDIO DE PAGO</label>
                <h4>{{ $invoices->namePM }}</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="nombre">CLIENTE</label>
                <h4>{{ $invoices->nameC }}</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="invoice">FACTURA No.</label>
                <h4>{{ $invoices->invoice }}</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="Fecha">FECHA EMISION</label>
                <h4>{{ $invoices->created_at }}</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="due_date">VENCE</label>
                <h4>{{ $invoices->due_date }}</h4>
            </div>
        </div>
    </div><br>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <h3>Detalle de la venta
                        <a href="{{ route('invoice.index') }}" class="btn btn-limon"><i class="fas fa-undo-alt mr-2"></i>Regresar</a></h3>
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
                                <th><p align="right">${{ $invoices->total }}</p></th>
                            </tr>

                            <tr>
                                <th colspan="3"><p align="right">TOTAL IVA:</p></th>
                                <th><p align="right">${{ $invoices->total_iva }}</p></th>
                            </tr>

                            <tr>
                                <th colspan="3"><p align="right">RETENCION:</p></th>
                                <th><p align="right">${{ $invoices->retention }}</p></th>
                            </tr>

                            <tr>
                                <th  colspan="3"><p align="right">TOTAL PAGAR:</p></th>
                                <th><p align="right">${{ $invoices->total_pay }}</p></th>
                            </tr>

                        </tfoot>
                        <tbody>
                            @foreach($invoice_products as $ip)
                                <tr>
                                    <td>{{ $ip->name }}</td>
                                    <td>${{ $ip->price }}</td>
                                    <td class="tdder">{{ $ip->quantity }}</td>
                                    <td class="tdder">{{ $ip->subtotal }}</td>
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
