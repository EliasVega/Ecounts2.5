@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="nombre">CLIENTE</label>
                <p>{{ $abonoven->nombreC }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="factura">Venta #</label>
                <p>{{ $abonoven->idV }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">ABONO</label>
                <p>{{ $abonoven->abono }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="vece">VENCE</label>
                <p>{{ $abonoven->fecVen }}</p>
            </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle de Abonos</strong>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('abonoven.index') }}" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Regresar</a>

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
                                <th><p align="right">${{ $abonoven->abono }}</p></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($abonovenmediopagos as $am)
                                <tr>
                                    <td>{{ $am->nombreM }}</td>
                                    <td>{{ $am->nombreB }}</td>
                                    <td>{{ $am->nombreT }}</td>
                                    <td>{{ $am->transaccion }}</td>
                                    <td>$ {{ $am->valor }}</td>
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
