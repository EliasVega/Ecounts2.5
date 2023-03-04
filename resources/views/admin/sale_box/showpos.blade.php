<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte de Caja</title>


    </head>
    <style>
        body {
        text-align: center;
        display: flex;
        margin: 0px auto;
        font-family: Roboto, "Helvetica Neue", Arial, sans-serif;
        font-weight: normal;
        line-height: 1.5;
        color: #151b1e;
        min-width: 100%;
        padding: 0%;
        }

        .clearfix {
            clear: both;
            float: none;
        }
        .unicos {
            width: 100%;
            display: flex;
            align-items: center;
        }
        .unicos p {
            font-size: 10px;
        }
        .izqlogo {
            align-items: center;
            width: 100%;
        }
        .derfact {
            width: 100%;
            text-align: right;
            font-size: 0.6em;

        }
        .derfactp {
            font-size: 1.5em;
            text-align: center;
        }
        .titulo {
            font-size: 20px;
            text-align: center;
        }

        .facturador {
            font-size: 0.6em;
            margin: 0px auto;
            text-align: center;
        }
        header {
            border-top: 2px solid #c6cccf;
            border-bottom: 2px solid #c6cccf;
        }
        thead {
            width: 100%;
            margin: 0%;
            padding: 0%;
        }
        tbody {
            width: 100%;
            margin: 0%;
            padding: 0%;
        }
        .cliente {
            margin-top: 0px;
            width: 100%;
            font-size: 0.6em;
            text-align: left;
        }
        th{
            font-size: 0.6rem;
        }
        td {
            font-size: 0.5rem;
        }

        #tdizq {
            text-align: right;
            font-size: 0.6rem;
        }
        #tdiz {
            text-align: right;
            font-size: 0.6rem;
        }
        #tdi {
            text-align: right;
            font-size: 0.6rem;
        }
        .fact {
            border-bottom: 1px solid #7a7d7e;
        }
        .tfd {
            margin: 0%;
            padding: 0%;
        }
        .gpsc {
            position: fixed;
            text-align: center;
        }
    </style>

    <body>

        <header>
            <div class="unicos">
                <div class="cliente">
                    <p>
                        Nombre:{{ $sale_box->user->name }}:<br>
                </div>
            </div>
            <div class="clearfix"></div>
        </header>

        <section>
            @if ($sale_box->invoice > 0)
                <div class="unicos">
                    <p>REPORTE DE ARTICULOS VENTAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Articulo</th>
                                <th>Cant</th>
                                <th>Iva</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($produc as $pro)
                            <tr>
                                <td>{{ $pro->id }}</td>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->stock }}</td>
                                <td>{{ number_format($pro->price, 2) }}</td>
                                <td>{{ number_format($pro->sale_price, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="1" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td class="tdder"><p align="right" class="tfd"><h2>${{number_format($sale_box->invoice,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->purchase > 0)
                <div class="unicos">
                    <p>REPORTE DE ARTICULOS COMPRAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Articulo</th>
                                <th>Cant</th>
                                <th>Iva</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($productpurc as $pro)
                            <tr>
                                <td>{{ $pro->id }}</td>
                                <td>{{ $pro->name }}</td>
                                <td>{{ $pro->stock }}</td>
                                <td>{{ number_format($pro->price, 2) }}</td>
                                <td>{{ number_format($pro->sale_price, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="1" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td class="tdder"><p align="right" class="tfd"><h2>${{number_format($sale_box->purchase,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->invoice > 0)
                <div class="unicos">
                    <p>REPORTE DE FACTURAS DE VENTA</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.Factura</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($invoices as $inv)
                            <tr>
                                <td>{{ $inv->document }}</td>
                                <td>{{ $inv->customer->name }}</td>
                                <td>$ {{ number_format($inv->total_pay, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="1" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->invoice,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->purchase > 0)
                <div class="unicos">
                    <p>REPORTE DE COMPRAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.Factura</th>
                                <th>Proveedor</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($purchases as $pur)
                            <tr>
                                <td>{{ $pur->document }}</td>
                                <td>{{ $pur->supplier->name }}</td>
                                <td>$ {{ number_format($pur->total_pay, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="1" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->purchase,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->expense > 0)
                <div class="unicos">
                    <p>REPORTE DE GASTOS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.Gasto</th>
                                <th>Proveedor</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($expenses as $exp)
                            <tr>
                                <td>{{ $exp->document }}</td>
                                <td>{{ $exp->supplier->name }}</td>
                                <td>$ {{ number_format($exp->total_pay, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="1" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->expense,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->order > 0)
                <div class="unicos">
                    <p>REPORTE DE PEDIDOS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.pedido</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($orders as $ord)
                            <tr>
                                <td>{{ $ord->id }}</td>
                                <td>{{ $ord->customer->name }}</td>
                                <td>$ {{ number_format($ord->total_pay, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->order,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->ncinvoice > 0)
                <div class="unicos">
                    <p>REPORTE DE NOTAS CREDITO VENTAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.NC</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($ncinvoices as $nc)
                            <tr>
                                <td>{{ $nc->id }}</td>
                                <td>{{ $nc->invoice->customer->name }}</td>
                                <td>$ {{ $nc->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($ncinvoice,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->ndinvoice > 0)
                <div class="unicos">
                    <p>REPORTE DE NOTAS DEBITO VENTAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.ND</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($ndinvoices as $nd)
                            <tr>
                                <td>{{ $nd->id }}</td>
                                <td>{{ $nd->invoice->customer->name }}</td>
                                <td>$ {{ $nd->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($ndinvoice,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->ncpurchase > 0)
                <div class="unicos">
                    <p>REPORTE DE NOTAS CREDITO COMPRAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.NC</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($ncinvoices as $nc)
                            <tr>
                                <td>{{ $nc->id }}</td>
                                <td>{{ $nc->invoice->customer->name }}</td>
                                <td>$ {{ $nc->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($ncpurchase,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->ndpurchase > 0)
                <div class="unicos">
                    <p>REPORTE DE NOTAS DEBITO COMPRAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.ND</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($ndinvoices as $nd)
                            <tr>
                                <td>{{ $nd->id }}</td>
                                <td>{{ $nd->invoice->customer->name }}</td>
                                <td>$ {{ $nd->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($ndpurchase,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->sum_pay_orders > 0)
                <div class="unicos">
                    <p>REPORTE DE ABONOS A PEDIDOS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.order</th>
                                <th>Cliente</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($pay_orders as $po)
                            <tr>
                                <td>{{ $po->order_id }}</td>
                                <td>{{ $po->order->customer->name }}</td>
                                <td>$ {{ $po->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sum_pay_orders,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->sum_pay_invoices > 0)
                <div class="unicos">
                    <p>REPORTE DE ABONOS A FACTURAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.Factura</th>
                                <th>Cliente</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($pay_invoices as $pi)
                            <tr>
                                <td>{{ $pi->invoice->document }}</td>
                                <td>{{ $pi->invoice->customer->name }}</td>
                                <td>$ {{ $pi->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sum_pay_invoices,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->sum_pay_purchases > 0)
                <div class="unicos">
                    <p>REPORTE DE PAGOS A COMPRAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.Compra</th>
                                <th>Proveedor</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($pay_purchases as $pp)
                            <tr>
                                <td>{{ $pp->purchase->id }}</td>
                                <td>{{ $pp->purchase->supplier->name }}</td>
                                <td>$ {{ $pp->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sum_pay_purchases,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->sum_pay_expenses > 0)
                <div class="unicos">
                    <p>REPORTE DE PAGOS Y GASTOS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>N°.Gasto</th>
                                <th>Proveedor</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($pay_expenses as $pe)
                            <tr>
                                <td>{{ $pe->expense->id }}</td>
                                <td>{{ $pe->expense->supplier->name }}</td>
                                <td>$ {{ $pe->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sum_pay_expenses,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->sum_cash_ins > 0)
                <div class="unicos">
                    <p>REPORTE DE ENTRADAS EFECTIVO</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Autoriza</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($cashIns as $cas)
                            <tr>
                                <td>{{ $cas->name }}</td>
                                <td>$ {{ $cas->payment }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sum_cash_ins,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            @if ($sale_box->sum_cash_outs > 0)
                <div class="unicos">
                    <p>REPORTE DE SALIDAS EFECTIVO</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Autoriza</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($cashOuts as $cas)
                            <tr>
                                <td>{{ $cas->name }}</td>
                                <td>$ {{ $cas->payment }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                            <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sum_cash_outs,2)}}</h2></p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            <div class="unicos">
                <p>REPORTE DE TOTALES</p>
                <table>
                    <thead>
                        <th>TOTALES</th>
                        <th>MOVIMIENTO</th>
                        <th>DE</th>
                        <th></th>
                        <th>VALOR</th>
                    </thead>
                    <tbody class="fact">
                        @if ($sale_box->invoice > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL FACTURAS:</p></th>
                                <td><h2 align="right">${{number_format($sale_box->invoice,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->order > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL PEDIDOS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sale_box->order,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->purchase > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL COMPRAS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sale_box->purchase,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->expense > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL GASTOS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sum_pay_expenses,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->ncinvoice > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL NOTA CREDITO VENTAS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sale_box->ncinvoice,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->ndinvoice > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL NOTA DEBITO VENTAS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sale_box->ndinvoice,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->ncpurchase > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL NOTA CREDITO COMPRAS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sale_box->ncpurchase,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->ndpurchase > 0)
                            <tr>
                                <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL NOTA DEBITO COMPRAS:</p></th>
                                <td><p align="right" class="tfd"><h2>${{number_format($sale_box->ndpurchase,2)}}</h2></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->in_invoice > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">INGRESOS FACTURAS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_invoice,2)}}</h2></p></td>
                        </tr>
                        @endif
                        @if ($sale_box->in_order > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">INGRESOS PEDIDOS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_order,2)}}</h2></p></td>
                        </tr>
                        @endif
                        @if ($sale_box->out_purchase > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EGRESOS COMPRAS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->out_purchase,2)}}</h2></p></td>
                        </tr>
                        @endif
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL INGRESOS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_total,2)}}</h2></p></td>
                        </tr>
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL EGRESOS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->out_total,2)}}</h2></p></td>
                        </tr>
                        @if ($sale_box->cash_box > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EFECTIVO INICIAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->cash_box,2)}}</h2></p></td>
                        </tr>
                        @endif
                        @if ($sale_box->in_invoice_cash > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EFECTIVO FACTURAS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_invoice_cash,2)}}</h2></p></td>
                        </tr>
                        @endif
                        @if ($sale_box->in_order_cash > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EFECTIVO PEDIDOS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_order_cash,2)}}</h2></p></td>
                        </tr>
                        @endif
                        @if ($sale_box->out_purchase_cash > 0)
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EFECTIVO COMPRAS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->out_purchase_cash,2)}}</h2></p></td>
                        </tr>
                        @endif
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL EFECTIVO:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->cash,2)}}</h2></p></td>
                        </tr>
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">SALIDA EFECTIVO:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->out,2)}}</h2></p></td>
                        </tr>
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">CAJA:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->cash - $sale_box->out ,2)}}</h2></p></td>
                        </tr>
                    </tbody>
                    <tfoot>


                    </tfoot>
                </table>
            </div>
        </section>
        <br>
        <br>
        <footer>
            Reporte cierre de Caja
        </footer>
    </body>
</html>



