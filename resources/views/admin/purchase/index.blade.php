@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
            <h5>Listado de Compras</h5>
                <a href="purchase/create" class="btn btn-celeste btn-sm"><i class="fa fa-plus mr-2"></i> Agregar Compra</a>
                <a href="{{ route('branch.index') }}" class="btn btn-redeco btn-sm ml-3"><i class="fas fa-undo-alt mr-2"></i>Inicio</a>
                <a href="{{ route('supplier.index') }}" class="btn btn-gris btn-sm"><i class="fas fa-undo-alt mr-2"></i>Proveedores</a>
                <a href="{{ route('pay_purchase.index') }}" class="btn btn-gris btn-sm"><i class="fas fa-undo-alt mr-2"></i>Abonos</a>
                <a href="{{ route('payment.index') }}" class="btn btn-gris btn-sm"><i class="fas fa-undo-alt mr-2"></i>Ant a Proveedores</a>
                <a href="{{ route('prePurchase.index') }}" class="btn btn-gris btn-sm"><i class="fas fa-undo-alt mr-2"></i>Pre Compra</a>
                <a href="{{ route('ndpurchase.index') }}" class="btn btn-gris btn-sm"><i class="fas fa-undo-alt mr-2"></i>N:D</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bpurchaseed table-condensed table-hover" id="purchases">
                    <thead>
                        <tr class="bg-info">
                            <th>Id</th>
                            <th>Proveedor</th>
                            <th>#Fac_Compra</th>
                            <th>Valor</th>
                            <th>Abonos</th>
                            <th>Saldo</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
<script type="text/javascript">
    $(document).ready(function ()
    {
        function print(){
            var purchase = "{{ $purchase ?? '' }}";
            if (purchase != '') {
                var imprimir = "{{ route('postPurchase', ['purchase' => ':purchase']) }}";
                imprimir = imprimir.replace(':purchase', purchase);
                window.open(imprimir, "_blank");
            }
        }


        print();
        $('#purchases').DataTable(
        {
            responsive: true,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: '{{ route('purchase.index') }}',
            order: [[ 0, "desc" ]],
            columns:
            [
                {data: 'id'},
                {data: 'supplier'},
                {data: 'document'},
                {data: 'total_pay', className: 'dt-body-right', render: $.fn.dataTable.render.number( '.', ',', 2, '$')},
                {data: 'pay', className: 'dt-body-right', render: $.fn.dataTable.render.number( '.', ',', 2, '$')},
                {data: 'balance', className: 'dt-body-right', render: $.fn.dataTable.render.number( '.', ',', 2, '$')},
                {data: 'created_at'},
                {data: 'status'},
                {data: 'btn'},
            ],
            dom: '<"pull-left"B><"pull-right"f>rt<"row"<"col-sm-4"l><"col-sm-4"i><"col-sm-4"p>>',
            buttons:
            [
                'copy', 'csv', 'excel', 'print',
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                }
            ],
            lengthMenu:
            [
                [
                    10, 25, 50, -1
                ],
                [
                    '10 rows', '25 rows', '50 rows', 'Show all'
                ]
            ],
            "language":
            {
                "processing": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "paginate":
                {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },

                "buttons":
                {
                    "copy": "Copiar",
                    "print": "Imprimir"
                },
            }
        });
    });
</script>
@endpush
</main>
@endsection




