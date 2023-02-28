<a href="{{ route('purchase.edit', $id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">
    <i class="far fa-edit"></i>
</a>
<a href="{{ route('purchase.show', $id) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Compra">
    <i class="far fa-eye"></i>
</a>
<a href="{{ route('show_pdf_purchase', $id) }}" class="btn btn-ver" target="_blank" data-toggle="tooltip" data-placement="top" title="Compra pdf"><i class="fas fa-file-pdf"></i>
</a>
<a href="{{ route('show_ndpurchase', $id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nota Debito">
    <i class="fas fa-notes-medical"></i>
</a>
<a href="{{ route('show_ncpurchase', $id) }}" class="btn btn-verde" data-toggle="tooltip" data-placement="top" title="Nota Credito">
    <i class="far fa-clipboard"></i>
</a>
<a href="{{ route('show_pay_purchase', $id) }}" class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Agregar Abono" >
    <i class="fas fa-file-invoice-dollar"></i>
</a>
<a href="{{ route('post_purchase', $id) }}" class="btn btn-ver" target="_blank" data-toggle="tooltip" data-placement="top" title="pdf Post" >
    <i class="fas fa-receipt"></i>
</a>
