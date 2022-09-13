@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="name">PROVEEDOR</label>
                <p>{{ $ncpurchases->nameS }}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="documento">FACTURA DE COMPRA</label>
                <p>{{ $ncpurchases->purchase }}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="name">RESPONSABLE</label>
                <p>{{ $ncpurchases->name }}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="documento">SEDE</label>
                <p>{{ $ncpurchases->nameB }}</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="documento">FECHA</label>
                <p>{{ $ncpurchases->created_at }}</p>
            </div>
        </div>
    </div><br>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Detalle de la compra</h3>
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
                                <th><p align="right">${{number_format($ncpurchases->total,2)}}</p></th>
                            </tr>

                            <tr>
                                <th colspan="3"><p align="right">TOTAL IMPUESTO (20%):</p></th>
                                <th><p align="right">${{number_format($ncpurchases->totalIva,2)}}</p></th>
                            </tr>

                            <tr>
                                <th  colspan="3"><p align="right">TOTAL PAGAR:</p></th>
                                <th><p align="right">${{number_format($ncpurchases->totalPay,2)}}</p></th>
                            </tr>

                        </tfoot>
                        <tbody>
                            @foreach($ncpurchaseProducts as $np)
                                <tr>
                                    <td>{{ $np->name }}</td>
                                    <td>${{ $np->price }}</td>
                                    <td>{{ $np->quantity }}</td>
                                    <td> ${{ number_format($np->quantity*$np->price,2) }}</td>
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
