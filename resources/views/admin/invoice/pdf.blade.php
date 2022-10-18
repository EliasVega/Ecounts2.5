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

                <p id="datos">Nit: {{ $company->nit }} -- {{ $company->dv }} --  {{ $company->nameL }} -- <br> R. fiscal. {{ $company->nameR }} <br> {{ $company->description }} -- {{ $company->nameO }} <br>Resolucion N°. {{ $indicators->resolution }} Prefijo: {{ $indicators->prefix }} Rango {{ $indicators->from }} <br> al {{ $indicators->to }} -- Vigencia: desde {{ $indicators->ddate_from }} hasta {{ $indicators->date_to }} <br> {{ $invoice->direcionB }} {{ $company->nameM }} -- {{ $company->nameD }} <br> Email: {{ $invoice->email }}
                    </p>
            </div>
            <!--DATOS FACTURA -->
            <div id="factura">
                <p> <h4>FACTURA ELECTRONICA <br> DE VENTA <br> <strong id="numfact">N°.{{ $indicators->prefijo }} - {{ $invoice->invoice }}</strong>  </h4>

                </p>
                <p> <h4>FECHA DE EMISION <br> <strong id="detosfact">{{ date('d-m-Y', strtotime($invoice->created_at)) }}</strong>  </h4>
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
                        <span id="td">{{ $invoice->number }}</span><br>
                        <span id="td">{{ $invoice->nameC }}</span><br>
                        <span id="td">{{ $invoice->description }}</span><br>
                        <span id="td">{{ $invoice->address }}</span><br>
                        <span id="td">{{ $invoice->nameM }}</span><br>
                        <span id="td">{{ $invoice->phone }}</span><br>
                        <span id="td">{{ $invoice->email }}</span><br>
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
                        <span id="td">{{ $invoice->namePF }}</span><br>
                        <span id="td">{{ $invoice->namePM }}</span><br>
                        <span id="td">{{ $invoice->due_date }}</span><br>
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
                            @foreach ($invoice_products as $ip)
                            <tr>
                                <td id="ccent">{{ number_format($ip->quantity) }}</td>
                                <td>{{ $ip->name }}</td>
                                <td class="tdder">${{ number_format($ip->price)}}</td>
                                <td class="tdder">${{number_format($ip->quantity * $ip->price)}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <!--DATOS FTOTALES -->
                            <tr>
                               <th colspan="3" class="footder">TOTAL:</th>
                               <td class="footder"><strong>${{number_format($invoicy->total,2)}}</strong></td>
                            </tr>

                            <tr>
                                <th colspan="3" class="footder">TOTAL IVA:</th>
                                <td class="footder"><strong>${{number_format($invoicy->total_iva,2)}}</strong> </td>
                            </tr>

                            <tr>
                                <th  colspan="3" class="footder">TOTAL PAGAR:</th>
                                <td class="footder"><strong id="total">${{number_format($invoicy->total_pay,2)}}</strong></td>
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



