@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="nombre">saleBox</label>
                <p>{{ $saleBox->id }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="efectivoabre">saleBox</label>
                <p>{{ $saleBox->cashbox }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abre">Abre</label>
                <p>{{ $saleBox->created_at }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="cierra">Cierra</label>
                <p>{{ $saleBox->updated_at }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="inOrderCash">Pedidos Efectivo</label>
                <p>{{ $saleBox->inOrderCash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/ ingresos Pedidos</label>
                <p>{{ $saleBox->inOrder }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="inInvoiceCash">Ventas Efectivo</label>
                <p>{{ $saleBox->inInvoiceCash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/ ingresos ventas</label>
                <p>{{ $saleBox->inInvoice }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/ ingresos</label>
                <p>{{ $saleBox->inPay }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="inPayCash">Total Ingresos Efectivo</label>
                <p>{{ $saleBox->inPayCash }}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="cashOut">Salida Efectivo</label>
                <p>{{ $saleBox->outCash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="balance">Total Efectivo</label>
                <p>{{ $saleBox->total }}</p>
            </div>
        </div>

    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Facturas</strong>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('saleBox.index') }}" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Regresar</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>N°.F</th>
                            <th>Cliente</th>
                            <th>Estado</th>
                            <th>Abonos</th>
                            <th>Saldo</th>
                            <th>Ventas</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="6"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $saleBox->sale }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($invoices as $inv)
                            <tr>
                                <td>{{ $inv->created_at }}</td>
                                <td>{{ $inv->invoice }}</td>
                                <td>{{ $inv->name }}</td>
                                <td>{{ $inv->status }}</td>
                                <td>$ {{ $inv->pay }}</td>
                                <td>$ {{ $inv->balance }}</td>
                                <td>$ {{ $inv->totalPay }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Pedidos</strong>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>N°.P</th>
                            <th>Cliente</th>
                            <th>Estado</th>
                            <th>Abonos</th>
                            <th>Saldo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="6"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $saleBox->order }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->status }}</td>
                                <td>$ {{ $order->pay }}</td>
                                <td>$ {{ $order->balance }}</td>
                                <td>$ {{ $order->totalPay }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Notas Debito Ventas</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>N°.P ND</th>
                            <th>N°. Fact</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $totalnd }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($ndinvoices as $nd)
                            <tr>
                                <td>{{ $nd->created_at }}</td>
                                <td>{{ $nd->id }}</td>
                                <td>{{ $nd->invoice }}</td>
                                <td>{{ $nd->name }}</td>
                                <td>$ {{ $nd->totalPay }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Notas Credito Venta</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>N°.NC</th>
                            <th>N° Factura</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($ncinvoices as $nc)
                            <tr>
                                <td>{{ $nc->created_at }}</td>
                                <td>{{ $nc->id }}</td>
                                <td>{{ $nc->invoice }}</td>
                                <td>{{ $nc->name }}</td>
                                <td>$ {{ $nc->totalPay }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Abonos a Pedidos</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>ID</th>
                            <th>N° Pedido</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($payOrders as $pay)
                            <tr>
                                <td>{{ $pay->created_at }}</td>
                                <td>{{ $pay->id }}</td>
                                <td>{{ $pay->idP }}</td>
                                <td>{{ $pay->name }}</td>
                                <td>$ {{ $pay->pay }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Abonos a Ventas</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>ID</th>
                            <th>N° Factura</th>
                            <th>Cliente</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($payInvoices as $pi)
                            <tr>
                                <td>{{ $pi->created_at }}</td>
                                <td>{{ $pi->id }}</td>
                                <td>{{ $pi->invoice }}</td>
                                <td>{{ $pi->name }}</td>
                                <td>$ {{ $pi->pay }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Entregas de efectivo</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>ID</th>
                            <th>Recibe Administrador</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                    </tfoot>
                    <tbody>
                        @foreach($cashOuts as $cas)
                            <tr>
                                <td>{{ $cas->created_at }}</td>
                                <td>{{ $cas->id }}</td>
                                <td>{{ $cas->name }}</td>
                                <td>$ {{ $cas->payment }}</td>
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
