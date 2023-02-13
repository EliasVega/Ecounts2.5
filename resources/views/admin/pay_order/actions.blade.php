<a href="{{ route('pay_order.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Abono" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('pdfPayOrder', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Abono Pedido pdf"><i class="fas fa-file-pdf"></i></button>
</a>
