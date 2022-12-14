@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Listado de Compras <a href="purchase/create"><button class="btn btn-success"><i class="fa fa-plus mr-2"></i>Agregar Compra</button></a>
                <a href="{{ route('branch.index') }}" class="btn btn-limon"><i class="fas fa-undo-alt mr-2"></i>Regresar</a>
                <a href="{{ route('product.index') }}" class="btn btn-gris"><i class="fas fa-undo-alt mr-2"></i>Productos</a>
                <a href="{{ route('supplier.index') }}" class="btn btn-gris"><i class="fas fa-undo-alt mr-2"></i>Proveedores</a>
                <a href="{{ route('ncpurchase.index') }}" class="btn btn-gris"><i class="fas fa-undo-alt mr-2"></i>N.C.</a>
                <a href="{{ route('ndpurchase.index') }}" class="btn btn-gris"><i class="fas fa-undo-alt mr-2"></i>N.D.</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover" id="purchases">
                    <thead>
                        <tr class="bg-info">
                            <th>Id</th>
                            <th>Proveedor</th>
                            <th>N° Factura</th>
                            <th>Valor</th>
                            <th>Fecha</th>
                            <th>Comprador</th>
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
        $('#purchases').DataTable(
        {
            responsive: true,
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: '{{ route('purchase.index') }}',
            columns:
            [

                {data: 'id'},
                {data: 'nameS'},
                {data: 'purchase'},
                {data: 'total_pay'},
                {data: 'created_at'},
                {data: 'name'},
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





