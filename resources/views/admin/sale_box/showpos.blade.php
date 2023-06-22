<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/post_box.css') }}">
        <title>Reporte de Caja</title>
    </head>
    <body>
        <header>
            <div class="center">
                <div id="logo">
                    <img src="{{ public_path('images/logos/'.$company->logo) }}" alt="{{ $company->name }}" width="120px" height="60px" class="app-logo">
                </div>
            </div>

            <div class="clearfix"></div>
        </header>
        <section>
            <div class="unicos">
                <div class="cliente">
                    <p>
                        Nombre: {{ $sale_box->user->name }}:</p>
                </div>
            </div>
            @if ($sale_box->invoice > 0)
                <div class="unicos">
                    <p>REPORTE DE ARTICULOS VENTAS</p>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Articulo</th>
                                <th>Cant</th>
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($invoiceProducts as $invoiceProduct)
                            <tr>
                                <td class="id">{{ $invoiceProduct->id }}</td>
                                <td class="name">{{ $invoiceProduct->name }}</td>
                                <td class="quantity">{{ $invoiceProduct->stock }}</td>
                                <td class="price" align="right">${{ number_format($invoiceProduct->price) }}</td>
                                <td class="subtotal" align="right">${{ number_format($invoiceProduct->sale_price) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                            <tr>
                                <th colspan="4" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->invoice)}}</p></td>
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
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($productPurchases as $produtPurchase)
                            <tr>
                                <td class="id">{{ $produtPurchase->id }}</td>
                                <td class="name">{{ $produtPurchase->name }}</td>
                                <td class="quantity">{{ $produtPurchase->stock }}</td>
                                <td class="price" align="right">${{ number_format($produtPurchase->price) }}</td>
                                <td class="subtotal" align="right">${{ number_format($produtPurchase->sale_price) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->purchase)}}</p></td>
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
                                <th>N°.Venta</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($invoices as $inv)
                            <tr>
                                <td class="document">{{ $inv->document }}</td>
                                <td class="third">{{ $inv->customer->name }}</td>
                                <td class="totals" align="right">$ {{ number_format($inv->total_pay) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->invoice)}}</p></td>
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
                                <th>N°.Compra</th>
                                <th>Proveedor</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody class="fact">
                            @foreach ($purchases as $pur)
                            <tr>
                                <td class="document">{{ $pur->document }}</td>
                                <td class="third">{{ $pur->supplier->name }}</td>
                                <td class="totals" align="right">$ {{ number_format($pur->total_pay) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->purchase)}}</p></td>
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
                                <td class="document">{{ $exp->document }}</td>
                                <td class="third">{{ $exp->supplier->name }}</td>
                                <td class="totals" align="right">$ {{ number_format($exp->total_pay, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->expense)}}</p></td>
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
                                <td class="document">{{ $ord->id }}</td>
                                <td class="third">{{ $ord->customer->name }}</td>
                                <td class="totals" align="right">$ {{ number_format($ord->total_pay, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->order)}}</p></td>
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
                                <td class="document">{{ $nc->id }}</td>
                                <td class="third">{{ $nc->invoice->customer->name }}</td>
                                <td class="totals" align="right">$ {{ $nc->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->ncinvoice)}}</p></td>
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
                                <td class="document">{{ $nd->id }}</td>
                                <td class="third">{{ $nd->invoice->customer->name }}</td>
                                <td class="totals" align="right">$ {{ $nd->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->ndinvoice)}}</p></td>
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
                                <td class="document">{{ $nc->id }}</td>
                                <td class="third">{{ $nc->invoice->customer->name }}</td>
                                <td class="totals" align="right">$ {{ $nc->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->ncpurchase)}}</p></td>
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
                                <td class="document">{{ $nd->id }}</td>
                                <td class="third">{{ $nd->invoice->customer->name }}</td>
                                <td class="totals" align="right">$ {{ $nd->total_pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sale_box->ndpurchase)}}</p></td>
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
                                <td class="document">{{ $po->order_id }}</td>
                                <td class="third">{{ $po->order->customer->name }}</td>
                                <td class="totals" align="right">$ {{ $po->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sum_pay->orders)}}</p></td>
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
                                <td class="document">{{ $pi->invoice->document }}</td>
                                <td class="third">{{ $pi->invoice->customer->name }}</td>
                                <td class="totals" align="right">$ {{ $pi->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sum_pay->invoices)}}</p></td>
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
                                <td class="document">{{ $pp->purchase->id }}</td>
                                <td class="third">{{ $pp->purchase->supplier->name }}</td>
                                <td class="totals" align="right">$ {{ $pp->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sum_pay->purchases)}}</p></td>
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
                                <td class="document">{{ $pe->expense->id }}</td>
                                <td class="third">{{ $pe->expense->supplier->name }}</td>
                                <td class="totals" align="right">$ {{ $pe->pay }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sum_pay->expenses)}}</p></td>
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
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sum_cash_ins)}}</p></td>
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
                                <th colspan="2" ><p align="right" >TOTAL:</p></th>
                                <td><p align="right" >${{number_format($sum_cash_outs)}}</p></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            @endif
            <div class="unicos">
                <p>REPORTE DE TOTALES</p>
                <table>
                    <thead>
                        <th class="totalreportname"></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @if ($sale_box->invoice > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL VENTAS:</p></th>
                                <td align="right"><h2>${{number_format($sale_box->invoice,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->order > 0)
                            <tr>
                                <th colspan="4"><p align="left" >TOTAL PEDIDOS:</p></th>
                                <td><strong>${{number_format($sale_box->order,2)}}</strong></p></td>
                            </tr>
                        @endif
                        @if ($sale_box->purchase > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL COMPRAS:</p></th>
                                <td align="right"><p  ><h2>${{number_format($sale_box->purchase,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->expense > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL GASTOS:</p></th>
                                <td align="right"><h2>${{number_format($sum_pay_expenses,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->ncinvoice > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL NOTA CREDITO VENTAS:</p></th>
                                <td align="right"><h2>${{number_format($sale_box->ncinvoice,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->ndinvoice > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL NOTA DEBITO VENTAS:</p></th>
                                <td align="right"><h2>${{number_format($sale_box->ndinvoice,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->ncpurchase > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL NOTA CREDITO COMPRAS:</p></th>
                                <td align="right"><h2>${{number_format($sale_box->ncpurchase,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->ndpurchase > 0)
                            <tr>
                                <th colspan="4" ><p align="left" >TOTAL NOTA DEBITO COMPRAS:</p></th>
                                <td align="right"><h2>${{number_format($sale_box->ndpurchase,2)}}</h2></td>
                            </tr>
                        @endif
                        @if ($sale_box->in_invoice > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >INGRESOS FACTURAS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->in_invoice,2)}}</h2></td>
                        </tr>
                        @endif
                        @if ($sale_box->in_order > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >INGRESOS PEDIDOS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->in_order,2)}}</h2></td>
                        </tr>
                        @endif
                        @if ($sale_box->out_purchase > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >EGRESOS COMPRAS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->out_purchase,2)}}</h2></td>
                        </tr>
                        @endif
                        <tr>
                            <th colspan="4" ><p align="left" >TOTAL INGRESOS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->in_total,2)}}</h2></td>
                        </tr>
                        <tr>
                            <th colspan="4" ><p align="left" >TOTAL EGRESOS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->out_total,2)}}</h2></td>
                        </tr>
                        @if ($sale_box->cash_box > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >EFECTIVO INICIAL:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->cash_box,2)}}</h2></td>
                        </tr>
                        @endif
                        @if ($sale_box->in_invoice_cash > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >EFECTIVO FACTURAS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->in_invoice_cash,2)}}</h2></td>
                        </tr>
                        @endif
                        @if ($sale_box->in_order_cash > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >EFECTIVO PEDIDOS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->in_order_cash,2)}}</h2></td>
                        </tr>
                        @endif
                        @if ($sale_box->out_purchase_cash > 0)
                        <tr>
                            <th colspan="4" ><p align="left" >EFECTIVO COMPRAS:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->out_purchase_cash,2)}}</h2></td>
                        </tr>
                        @endif
                        <tr>
                            <th colspan="4" ><p align="left" >TOTAL EFECTIVO:</p></th>
                            <td><h2>${{number_format($sale_box->cash,2)}}</h2></td>
                        </tr>
                        <tr>
                            <th colspan="4" ><p align="left" >SALIDA EFECTIVO:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->departure,2)}}</h2></td>
                        </tr>
                        <tr>
                            <th colspan="4" ><p align="left" >SALDO EN CAJA:</p></th>
                            <td align="right"><h2>${{number_format($sale_box->cash - $sale_box->departure ,2)}}</h2></td>
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



