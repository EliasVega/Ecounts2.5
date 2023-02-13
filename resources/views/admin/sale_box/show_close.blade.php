@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="nombre">Caja #</label>
                <p>{{ $sale_box->id }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="cash_open">Efectivo Inicial</label>
                <p>{{ $sale_box->cash_box }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="open">Abierta</label>
                <p>{{ $sale_box->created_at }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="close">Cerrada</label>
                <p>{{ $sale_box->updated_at }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_order_cash">Pedidos Efectivo</label>
                <p>{{ $sale_box->in_order_cash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/Ingresos Pedidos</label>
                <p>{{ $sale_box->in_order }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_invoice_cash">Ventas Efectivo</label>
                <p>{{ $sale_box->in_invoice_cash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Ingresos ventas</label>
                <p>{{ $sale_box->in_invoice }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_invoice_cash">Compras Efectivo</label>
                <p>{{ $sale_box->out_purchase_cash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Compras</label>
                <p>{{ $sale_box->out_purchase }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_invoice_cash">Notas Debito Efectivo</label>
                <p>{{ $sale_box->in_ndinvoice_cash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="abono">T/Ingresos Nota Debito</label>
                <p>{{ $sale_box->in_ndinvoice }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="pay">T/Ingresos</label>
                <p>{{ $sale_box->in_pay }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="in_pay_cash">Total Ingresos Efectivo</label>
                <p>{{ $sale_box->in_pay_cash }}</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="cash_out">Salida Efectivo</label>
                <p>{{ $sale_box->out_cash }}</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="form-group">
                <label class="form-control-label" for="balance">Total Efectivo</label>
                <p>{{ $sale_box->total }}</p>
            </div>
        </div>

    </div>
    <div class="box-body row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <strong class="tpdf">Articulos Vendidos</strong>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('sale_box.index') }}" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Regresar</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>id</th>
                            <th>Producto</th>
                            <th>cantidad</th>
                            <th>iva</th>
                            <th>total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="3"><p align="right">TOTALES:</p></th>
                            <th><p align="right">${{ $ivasubt }}</p></th>
                            <th><p align="right">${{ $sumtotal }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($produc as $pro)
                            <tr>
                                <td>{{ $pro->id }}</td>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->stock }}</td>
                                <td class="tdder">$ {{ $pro->price }}</td>
                                <td class="tdder">$ {{ $pro->stock * $pro->sale_price }}</td>


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
                <strong class="tpdf">Articulos Comprados</strong>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="{{ route('sale_box.index') }}" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Regresar</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>id</th>
                            <th>Producto</th>
                            <th>cantidad</th>
                            <th>iva</th>
                            <th>total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="3"><p align="right">TOTALES:</p></th>
                            <th><p align="right">${{ $ivasubt }}</p></th>
                            <th><p align="right">${{ $sumtotal }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($productpurc as $pro)
                            <tr>
                                <td>{{ $pro->id }}</td>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->stock }}</td>
                                <td class="tdder">$ {{ $pro->price }}</td>
                                <td class="tdder">$ {{ $pro->stock * $pro->price }}</td>


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
                <strong class="tpdf">Detalle Facturas</strong>
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
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $invpay }}</p></th>
                            <th><p align="right">${{ $invbalance }}</p></th>
                            <th><p align="right">${{ $sale_box->sale }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($invoices as $inv)
                            <tr>
                                <td>{{ $inv->created_at }}</td>
                                <td>{{ $inv->invoice }}</td>
                                <td>{{ $inv->customer->name }}</td>
                                <td>{{ $inv->status }}</td>
                                <td class="tdder">$ {{ $inv->pay }}</td>
                                <td class="tdder">$ {{ $inv->balance }}</td>
                                <td class="tdder">$ {{ $inv->total_pay }}</td>


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
                            <th>N°.F</th>
                            <th>Proveedor</th>
                            <th>Estado</th>
                            <th>Abonos</th>
                            <th>Saldo</th>
                            <th>Ventas</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $purpay }}</p></th>
                            <th><p align="right">${{ $purbalance }}</p></th>
                            <th><p align="right">${{ $sale_box->purchase }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($purchases as $pur)
                            <tr>
                                <td>{{ $pur->created_at }}</td>
                                <td>{{ $pur->invoice }}</td>
                                <td>{{ $pur->supplier->name }}</td>
                                <td>{{ $pur->status }}</td>
                                <td class="tdder">$ {{ $pur->pay }}</td>
                                <td class="tdder">$ {{ $pur->balance }}</td>
                                <td class="tdder">$ {{ $pur->total_pay }}</td>


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
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $ordpay }}</p></th>
                            <th><p align="right">${{ $ordbalance }}</p></th>
                            <th><p align="right">${{ $sale_box->order }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->customer->name }}</td>
                                <td>{{ $order->status }}</td>
                                <td class="tdder">$ {{ $order->pay }}</td>
                                <td class="tdder">$ {{ $order->balance }}</td>
                                <td class="tdder">$ {{ $order->total_pay }}</td>

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
                            <th>N°. ND</th>
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
                                <td>{{ $nd->invoice->id }}</td>
                                <td>{{ $nd->customer->name }}</td>
                                <td>$ {{ $nd->total_pay }}</td>
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
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $totalnc }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($ncinvoices as $nc)
                            <tr>
                                <td>{{ $nc->created_at }}</td>
                                <td>{{ $nc->id }}</td>
                                <td>{{ $nc->invoice->id }}</td>
                                <td>{{ $nc->customer->name }}</td>
                                <td>$ {{ $nc->total_pay }}</td>
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
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $sum_pay_orders }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($pay_orders as $pay)
                            <tr>
                                <td>{{ $pay->created_at }}</td>
                                <td>{{ $pay->id }}</td>
                                <td>{{ $pay->order->id }}</td>
                                <td>{{ $pay->order->customer->name }}</td>
                                <td class="tdder">$ {{ $pay->pay }}</td>
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
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $sum_pay_invoices }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($pay_invoices as $pi)
                            <tr>
                                <td>{{ $pi->created_at }}</td>
                                <td>{{ $pi->id }}</td>
                                <td>{{ $pi->invoice->document }}</td>
                                <td>{{ $pi->invoice->customer->name }}</td>
                                <td class="tdder">$ {{ $pi->pay }}</td>
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
                <strong class="tpdf">Detalle Pagos por Compras</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>ID</th>
                            <th>N° Factura</th>
                            <th>Proveedor</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $sum_pay_purchases }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($pay_purchases as $pp)
                            <tr>
                                <td>{{ $pp->created_at }}</td>
                                <td>{{ $pp->id }}</td>
                                <td>{{ $pp->purchase->document }}</td>
                                <td>{{ $pp->purchase->supplier->name }}</td>
                                <td class="tdder">$ {{ $pp->pay }}</td>
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
                <strong class="tpdf">Detalle Pagos Anticipados</strong>

            </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <tr class="bg-info">
                            <th>Fecha</th>
                            <th>ID</th>
                            <th>Proveedor</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $sum_payments }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($payments as $pay)
                            <tr>
                                <td>{{ $pay->created_at }}</td>
                                <td>{{ $pay->id }}</td>
                                <td>{{ $pay->purchase->supplier->name }}</td>
                                <td class="tdder">$ {{ $pay->pay }}</td>
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
                        <tr>
                            <th  colspan="3"><p align="right">TOTAL:</p></th>
                            <th><p align="right">${{ $sum_pay_cashs }}</p></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($cash_outs as $cas)
                            <tr>
                                <td>{{ $cas->created_at }}</td>
                                <td>{{ $cas->id }}</td>
                                <td>{{ $cas->name }}</td>
                                <td class="tdder">$ {{ $cas->payment }}</td>
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
