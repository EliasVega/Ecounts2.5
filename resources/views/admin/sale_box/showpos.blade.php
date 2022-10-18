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
                        Nombre:{{ $users->name }}:<br>
                </div>
            </div>
            <div class="clearfix"></div>
        </header>

        <section>
            <div class="unicos">
                        REPORTE DE FACTURAS
                <table>
                    <thead>
                        <tr>
                            <th>N°.Factura</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($invoices as $inv)
                        <tr>
                            <td>{{ $inv->invoice }}</td>
                            <td>$ {{ $inv->total_pay }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="1" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_invoice,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE PEDIDOS
                <table>
                    <thead>
                        <tr>
                            <th>N°.pedido</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($orders as $ord)
                        <tr>
                            <td>{{ $ord->id }}</td>
                            <td>$ {{ $ord->total_pay }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_order,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE NOTAS CREDITO
                <table>
                    <thead>
                        <tr>
                            <th>N°.NC</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($ncinvoices as $nc)
                        <tr>
                            <td>{{ $nc->id }}</td>
                            <td>$ {{ $nc->total_pay }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_ncinv,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE NOTAS DEBITO
                <table>
                    <thead>
                        <tr>
                            <th>N°.ND</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($ndinvoices as $nd)
                        <tr>
                            <td>{{ $nd->id }}</td>
                            <td>$ {{ $nd->total_pay }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_ndinv,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE ABONOS A PEDIDOS
                <table>
                    <thead>
                        <tr>
                            <th>N°.order</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($pay_orders as $po)
                        <tr>
                            <td>{{ $po->idO }}</td>
                            <td>$ {{ $po->pay }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_pay_order,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE ABONOS A FACTURAS
                <table>
                    <thead>
                        <tr>
                            <th>N°.Factura</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($pay_invoices as $pi)
                        <tr>
                            <td>{{ $pi->invoice }}</td>
                            <td>$ {{ $pi->pay }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_pay_inv,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE SALIDAS EFECTIVO
                <table>
                    <thead>
                        <tr>
                            <th>Autoriza</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody class="fact">
                        @foreach ($cash_outs as $cas)
                        <tr>
                            <td>{{ $cas->name }}</td>
                            <td>$ {{ $cas->payment }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr>
                           <th colspan="3" class="tfd"><p align="right" class="tfd">TOTAL:</p></th>
                           <td><p align="right" class="tfd"><h2>${{number_format($total_out,2)}}</h2></p></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="unicos">
                REPORTE DE TOTALES
                <table>
                    <thead>
                        <th>TOTALES</th>
                        <th>MOVIMIENTO</th>
                        <th>DE</th>
                        <th>sale_box</th>
                        <th>VALOR</th>
                    </thead>
                    <tbody class="fact">
                        <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">invoiceS FACTURAS:</p></th>
                            <td><h2 align="right">${{number_format($total_invoice,2)}}</h2></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">invoiceS orderS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($total_order,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL NOTA CREDITO:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($total_ncinv,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL NOTA DEBITO:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($total_ndinv,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">INGRESOS FACTURAS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_invoice,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">INGRESOS orderS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_order,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL INGRESOS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_pay,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">sale_box INICIAL:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->cash_box,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EFECTIVO FACTURAS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_invoice_cash,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">EFECTIVO PEDIDOS:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_order_cash,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">TOTAL EFECTIVO:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->in_pay_cash,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">SALIDA EFECTIVO:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($total_out,2)}}</h2></p></td>
                         </tr>
                         <tr>
                            <th colspan="4" class="tfd"><p align="left" class="tfd">CAJA:</p></th>
                            <td><p align="right" class="tfd"><h2>${{number_format($sale_box->total,2)}}</h2></p></td>
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



