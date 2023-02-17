@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="nombre">sale_box</label>
                <p>{{ $sale_box->id }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="cash_open">sale_box</label>
                <p>{{ number_format($sale_box->cash_box,2) }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="open">Abre</label>
                <p>{{ $sale_box->created_at }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="close">Cierra</label>
                <p>{{ $sale_box->updated_at }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/Ingresos</label>
                <p>{{ number_format($sale_box->in_pay,2) }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_pay_cash">Total Ingresos Efectivo</label>
                <p>{{ number_format($sale_box->in_pay_cash,2) }}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="cash_out">Salida Efectivo</label>
                <p>{{ number_format($sale_box->out_cash,2) }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="balance">Total Efectivo</label>
                <p>{{ number_format($sale_box->total,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_order_cash">Pedidos Efectivo</label>
                <p>{{ number_format($sale_box->in_order_cash,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/Ing Pedidos</label>
                <p>{{ number_format($sale_box->in_order,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/Pedidos</label>
                <p>{{ number_format($sale_box->order,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_invoice_cash">Ventas Efectivo</label>
                <p>{{ number_format($sale_box->in_invoice_cash,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Ing ventas</label>
                <p>{{ number_format($sale_box->in_invoice,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Ventas</label>
                <p>{{ number_format($sale_box->sale,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_invoice_cash">Compras Efectivo</label>
                <p>{{ number_format($sale_box->out_purchase_cash,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Egresos compras</label>
                <p>{{ number_format($sale_box->out_purchase,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Compras</label>
                <p>{{ number_format($sale_box->purchase,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_invoice_cash">Gastos Efectivo</label>
                <p>{{ number_format($sale_box->out_expense_cash,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Egresos Gastos</label>
                <p>{{ number_format($sale_box->out_expense,2) }}</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Gastos</label>
                <p>{{ number_format($sale_box->expense,2) }}</p>
            </div>
        </div>


    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Detalle Facturas</strong>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('sale_box.index') }}" class="btn btn-gris"><i class="fa fa-plus mr-2"></i>Regresar</a>
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
                            <th><p align="right">${{ number_format($sale_box->sale,2) }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($invoices as $inv)
                            <tr>
                                <td>{{ $inv->created_at }}</td>
                                <td>{{ $inv->invoice }}</td>
                                <td>{{ $inv->name }}</td>
                                <td>{{ $inv->status }}</td>
                                <td class="tdder">$ {{ number_format($inv->pay,2) }}</td>
                                <td class="tdder">$ {{ number_format($inv->balance,2) }}</td>
                                <td class="tdder">$ {{ number_format($inv->total_pay,2) }}</td>


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
                <strong class="tpdf">Detalle Compras</strong>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>N°.P</th>
                            <th>Proveedor</th>
                            <th>Estado</th>
                            <th>Abonos</th>
                            <th>Saldo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="6"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ number_format($sale_box->purchase,2) }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($purchases as $pur)
                            <tr>
                                <td>{{ $pur->created_at }}</td>
                                <td>{{ $pur->id }}</td>
                                <td>{{ $pur->name }}</td>
                                <td>{{ $pur->status }}</td>
                                <td class="tdder">$ {{ number_format($pur->pay,2) }}</td>
                                <td class="tdder">$ {{ number_format($pur->balance,2) }}</td>
                                <td class="tdder">$ {{ number_format($pur->total_pay,2) }}</td>

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
                <strong class="tpdf">Detalle Gastos</strong>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>N°.P</th>
                            <th>Proveedor</th>
                            <th>Estado</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="6"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ number_format($sale_box->expense,2) }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($expenses as $exp)
                            <tr>
                                <td>{{ $exp->created_at }}</td>
                                <td>{{ $exp->id }}</td>
                                <td>{{ $exp->name }}</td>
                                <td class="tdder">$ {{ number_format($exp->total_pay,2) }}</td>

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
                            <th><p align="right">${{ number_format($sale_box->order,2) }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->status }}</td>
                                <td class="tdder">$ {{ number_format($order->pay,2) }}</td>
                                <td class="tdder">$ {{ number_format($order->balance,2) }}</td>
                                <td class="tdder">$ {{ number_format($order->total_pay,2) }}</td>

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
                            <th><p align="right">${{ number_format($ndipay,2) }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($ndinvoices as $nd)
                            <tr>
                                <td>{{ $nd->created_at }}</td>
                                <td>{{ $nd->id }}</td>
                                <td>{{ $nd->invoice }}</td>
                                <td>{{ $nd->name }}</td>
                                <td class="tdder">$ {{ number_format($nd->total_pay,2) }}</td>
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
                                <td class="tdder">$ {{ number_format($nc->total_pay,2) }}</td>
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
                        @foreach($pay_orders as $pay)
                            <tr>
                                <td>{{ $pay->created_at }}</td>
                                <td>{{ $pay->id }}</td>
                                <td>{{ $pay->order->id }}</td>
                                <td>{{ $pay->order->customer->name }}</td>
                                <td class="tdder">$ {{ number_format($pay->pay,2) }}</td>
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
                        @foreach($pay_invoices as $pi)
                            <tr>
                                <td>{{ $pi->created_at }}</td>
                                <td>{{ $pi->id }}</td>
                                <td>{{ $pi->invoice->id }}</td>
                                <td>{{ $pi->invoice->customer->name }}</td>
                                <td class="tdder">$ {{ number_format($pi->pay,2) }}</td>
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
                        @foreach($cash_outs as $cas)
                            <tr>
                                <td>{{ $cas->created_at }}</td>
                                <td>{{ $cas->id }}</td>
                                <td>{{ $cas->name }}</td>
                                <td class="tdder">$ {{ number_format($cas->payment,2) }}</td>
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
