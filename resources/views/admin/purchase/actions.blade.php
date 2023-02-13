<a href="{{ route('purchase.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Venta" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('show_pdf_purchase', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Compra pdf"><i class="fas fa-file-pdf"></i></i></button>
</a>
<a href="{{ route('show_ndpurchase', $id) }}">
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nota Debito"><i class="fas fa-notes-medical"></i></button>
</a>
<a href="{{ route('show_ncpurchase', $id) }}">
    <button class="btn btn-verde" data-toggle="tooltip" data-placement="top" title="Nota Credito"><i class="far fa-clipboard"></i></button>
</a>
<a href="{{ route('show_pay_purchase', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Agregar Abono" ><i class="fas fa-file-invoice-dollar"></i></button>
</a>
<a href="{{ route('post_purchase', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="pdf Post" ><i class="fas fa-receipt"></i></button>
</a>
