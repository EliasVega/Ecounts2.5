<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ 'css/pdfs.css' }}">
        <title>Factura de venta</title>

    </head>
    <header id="header">
        <!-- LOGGO -->
        <div class="center">
            <div id="logo">
                <img src="{{ public_path('images/logos/'.$company->logo) }}" alt="{{ $company->name }}" width="150px" height="50px" class="app-logo">
            </div>
        <!--DATOS company -->
            <div class="empresa">
                <p><strong id="nombre">{{  $company->name  }}</strong></p>

                <p id="datos">Nit: {{ $company->nit }} -- {{ $company->dv }} --  {{ $company->nameL }} -- <br> R. fiscal. {{ $company->nameR }} <br> {{ $company->description }} -- {{ $company->nameO }} <br> {{ $order->direcionB }} {{ $company->nameM }} -- {{ $company->nameD }} <br> Email: {{ $order->email }}
                    </p>
            </div>
            <!--DATOS FACTURA -->
            <div id="factura">
                <p> <h4> PEDIDO <br> <strong id="numfact">N°. {{ $order->id }}</strong>  </h4>

                </p>
                <p> <h4>FECHA DE EMISION <br> <strong id="detosfact">{{ date('d-m-Y', strtotime($order->created_at)) }}</strong>  </h4>
                </p>
            </div>
        </div>
    </header>
    <body>
        <!--DATOS CLIENTE -->
        <div class="content">
            <div class="center">
                <div id="tcliente">
                    <span id="titulo"><strong>DATOS DEL CLIENTE</strong></span>
                </div>
            </div>
            <div class="center">
                <!--CODIGO QR -->
                <div id="qr">
                    <img src="{{ public_path('images/qr.jpg') }}" alt="qr">
                </div>
                <div id="cliente">
                    <!--DATOS CLIENTE -->
                    <div id="titc">
                        <span id="tc">CC o NIT: </span><br>
                        <span id="tc">NOMBRE:   </span><br>
                        <span id="tc">REGIMEN:  </span><br>
                        <span id="tc">DIRECCION:</span><br>
                        <span id="tc">CIUDAD:   </span><br>
                        <span id="tc">TELEFONO: </span><br>
                        <span id="tc">EMAIL:    </span><br>
                    </div>
                    <div id="titd">
                        <span id="td">{{ $ordery->number }}</span><br>
                        <span id="td">{{ $ordery->nameC }}</span><br>
                        <span id="td">{{ $ordery->description }}</span><br>
                        <span id="td">{{ $ordery->address }}</span><br>
                        <span id="td">{{ $ordery->nameM }}</span><br>
                        <span id="td">{{ $ordery->phone }}</span><br>
                        <span id="td">{{ $ordery->email }}</span><br>
                    </div>
                </div>
                <div id="fpago">
                    <!--FORMA DE PAGO-->
                    <div id="tfpago">
                        <span id="tc">F. pago: </span><br>
                        <span id="tc">M. pago:   </span><br>
                        <span id="tc">Vence:</span><br>
                    </div>
                    <div id="dfpago">
                        <span id="td">{{ $ordery->namePF }}</span><br>
                        <span id="td">{{ $ordery->namePM }}</span><br>
                        <span id="td">{{ $ordery->due_date }}</span><br>
                    </div>
                </div>

            </div>

        </div>
        <div class="contenido">
            <div class="center">
                <div id="ttabla">
                    <table class="tabla">
                        <!--DETALLE DE VENTA -->
                        <thead>
                            <tr>
                                <th id="uno">Cant.</th>
                                <th id="dos">Descripcion del producto</th>
                                <th>Valor</th>
                                <th>SubTotal ($)</th>
                            </tr>
                        </thead>
                        <tbody class="detalle">
                            @foreach ($orderProduct as $op)
                            <tr>
                                <td id="ccent">{{ number_format($op->quantity) }}</td>
                                <td>{{ $op->name }}</td>
                                <td class="tdder">${{ number_format($op->price)}}</td>
                                <td class="tdder">${{number_format($op->quantity * $op->price)}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <!--DATOS FTOTALES -->
                            <tr>
                               <th colspan="3" class="footder">TOTAL:</th>
                               <td class="footder"><strong>${{number_format($ordery->total,2)}}</strong></td>
                            </tr>

                            <tr>
                                <th colspan="3" class="footder">TOTAL IVA:</th>
                                <td class="footder"><strong>${{number_format($ordery->totalIva,2)}}</strong> </td>
                            </tr>

                            <tr>
                                <th  colspan="3" class="footder">TOTAL PAGAR:</th>
                                <td class="footder"><strong id="total">${{number_format($ordery->totalPay,2)}}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
        <br>
        <br>
        <footer>
            Impreso por Ecounts S.A.S. derechos reservados
        </footer>
    </body>
</html>



