@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="name">CLIENTE</label>
                <p>{{ $payInvoice->nameC }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="factura">Venta #</label>
                <p>{{ $payInvoice->idI }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">ABONO</label>
                <p>{{ $payInvoice->pay }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="vece">VENCE</label>
                <p>{{ $payInvoice->due_date }}</p>
            </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle de Abonos</strong>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('payInvoice.index') }}" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Regresar</a>

        </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                        <thead>
                            <tr class="bg-info">
                                <th>Medio de Pago</th>
                                <th>Banco</th>
                                <th>Tarjeta</th>
                                <th>Transaccion</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th  colspan="4"><p align="right">TOTAL:</p></th>
                                <th><p align="right">${{ $payInvoice->pay }}</p></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($payinvoicePaymethods as $pp)
                                <tr>
                                    <td>{{ $pp->nameM }}</td>
                                    <td>{{ $pp->nameB }}</td>
                                    <td>{{ $pp->nameT }}</td>
                                    <td>{{ $pp->transaction }}</td>
                                    <td>$ {{ $pp->balance }}</td>
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
