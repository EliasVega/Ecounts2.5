<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/voucher.css') }}">
        <title>ANTICIPO</title>

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
                <p>COMPROBANTE <br> DE EGRESO <br> <strong id="numbervoucher">N°. {{ $payPurchase->id }}</strong></p>

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
                <p>{{ date('d-m-Y', strtotime($payPurchase->created_at)) }}</p>
            </div>
            <div class="description3">
                <p>$ {{ number_format($payPurchase->pay, 2) }}</p>
            </div>

            <div class="clearfix"></div>
            <div class="title">
                <p>DIRECCION:</p>
            </div>
            <div class="description4">
                <p>{{  $payPurchase->purchase->supplier->address  }}</p>
            </div>
            <div class="title">
                <p>TELEFONO:</p>
            </div>
            <div class="description2">
                <p>{{  $payPurchase->purchase->supplier->phone  }}</p>
            </div>
            <div class="clearfix"></div>
            <div class="title">
                <p>RECIBO DE:</p>
            </div>
            <div class="description5">
                <p>{{  $payPurchase->purchase->supplier->name  }}</p>
            </div>
            <div class="clearfix"></div>
            <div class="title">
                <p>CONCEPTO DE::</p>
            </div>
            <div class="description4">
                <p>Abono a Compra # {{ $payPurchase->purchase->id }} </p>
            </div>
            <div class="title">
                <p>Comprobante</p>
            </div>
            <div class="description2">
                <p>{{ $payPurchase->id }}</p>
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
                            @foreach ($payPurchase_PaymentMethods as $pp)
                            <tr>
                                <td>{{ $pp->transaction }}</td>
                                <td>{{ $pp->paymentMethod->name }}</td>
                                <td class="tdder">$ {{ number_format($pp->payment, 2) }}</td>
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



