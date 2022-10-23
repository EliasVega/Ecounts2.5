<a href="{{ route('show_invoicy', $id) }}">
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Facturar Pedido"><i class="fas fa-receipt"></i></button>
</a>
<a href="{{ route('order.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Pedido" ><i class="far fa-eye"></i></button>
</a>

<a href="{{ route('show_pay_order', $id) }}">
    <button class="btn btn-lila" data-toggle="tooltip" data-placement="top" title="Agregar Abono" ><i class="fas fa-file-invoice-dollar"></i></button>
</a>
<a href="{{ route('show_pdf_order', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Pedido pdf"><i class="fas fa-file-invoice"></i></button>
</a>
<a href="{{ route('eliminar', $id) }}">
    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar Pedido" ><i class="fas fa-trash"></i></button>
</a>
