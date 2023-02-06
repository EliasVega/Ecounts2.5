<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/voucher.css') }}">
        <title>ABONO A FACTURA</title>

    </head>
    <header id="header">
        <!-- LOGGO -->
        <div class="center">
            <div id="logo">
                <img src="{{ public_path('images/logos/'.$company->logo) }}" alt="{{ $company->name }}" class="app-logo">
            </div>
        <!--DATOS company -->
            <div class="company">
                <p><strong id="name">{{  $company->name  }}</strong></p>

                <p id="data">Nit: {{ $company->nit }} -- {{ $company->dv }} <br> {{ $company->municipality->name }} -- {{ $company->department->name }} <br> Email: {{ $company->email }}
                    </p>
            </div>
            <!--DATOS FACTURA -->
            <div id="voucher">
                <p>COMPROBANTE <br> DE EGRESO <br> <strong id="numbervoucher">N°. {{ $pay_purchase->id }}</strong></p>

            </div>
        </div>
    </header>
    <body>
        <div class="information">
            <div class="title">
                <p>Ciudad:</p>
            </div>
            <div class="description">
                <p>{{  $company->municipality->name  }}</p>
            </div>
            <div class="title">
                <p>Fecha</p>
            </div>
            <div class="description2">
                <p>{{ date('d-m-Y', strtotime($pay_purchase->created_at)) }}</p>
            </div>
            <div class="description3">
                <p>$ {{ $pay_purchase->pay }}</p>
            </div>

            <div class="clearfix"></div>
            <div class="title">
                <p>DIRECCION:</p>
            </div>
            <div class="description4">
                <p>{{  $pay_purchase->purchase->supplier->address  }}</p>
            </div>
            <div class="title">
                <p>TELEFONO:</p>
            </div>
            <div class="description2">
                <p>{{  $pay_purchase->purchase->supplier->phone  }}</p>
            </div>
            <div class="clearfix"></div>
            <div class="title">
                <p>RECIBO DE:</p>
            </div>
            <div class="description5">
                <p>{{  $pay_purchase->purchase->supplier->name  }}</p>
            </div>
            <div class="clearfix"></div>
            <div class="title">
                <p>CONCEPTO DE::</p>
            </div>
            <div class="description5">
                <p>Abono a Factura N°. {{  $pay_purchase->purchase->purchase  }}</p>
            </div>
        </div>
        <div class="content">
            <div class="center">
                <div id="ttable">
                    <table class="table">
                        <!--DETALLE DE VENTA -->
                        <thead>
                            <tr>
                                <th>Transaccion</th>
                                <th>Medio de pago</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pay_purchase_payment_methods as $pp)
                            <tr>
                                <td>{{ $pp->transaction }}</td>
                                <td>{{ $pp->name }}</td>
                                <td class="tdder">$ {{ $pp->payment }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>

        <!--DATOS CLIENTE -->
        <br>
        <br>
        <footer class="footer">
            <div class="signature">
                <p>{{ $user->name }} <br>
                C:C: {{ $user->number }}</p>
            </div>
            <div class="signature">
                <p>Firma responsable <br>
                C:C: </p>
            </div>
        </footer>
    </body>
</html>



