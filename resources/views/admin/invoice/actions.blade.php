<a href="{{ route('invoice.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Venta" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('show_invoice', $id) }}">
    <button class="btn btn-limon" data-toggle="tooltip" data-placement="top" title="Factura Electronica"><i class="fas fa-file-invoice-dollar"></i></button>
</a>
<a href="{{ route('show_pdf_invoice', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Factura de venta pdf" ><i class="fas fa-file-pdf"></i></button>
</a>
<a href="{{ route('show_ndinvoice', $id) }}">
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nota Debito"><i class="fas fa-notes-medical"></i></button>
</a>
<a href="{{ route('show_ncinvoice', $id) }}">
    <button class="btn btn-verde" data-toggle="tooltip" data-placement="top" title="Nota Credito"><i class="fas fa-clipboard"></i></button>
</a>
<a href="{{ route('show_pay_invoice', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Agregar Abono" ><i class="fas fa-file-invoice-dollar"></i></button>
</a>
<a href="{{ route('post', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="pdf Post" ><i class="fas fa-file-invoice-dollar"></i></button>
</a>
