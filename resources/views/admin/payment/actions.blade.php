<a href="{{ route('payment.edit', $id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i>
</a>
<a href="{{ route('payment.show', $id) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Abono" >
        <i class="far fa-eye"></i>
</a>
<a href="{{ route('paymentPdf', $id) }}" class="btn btn-lila" target="_blank" data-toggle="tooltip" data-placement="top" title="Abono pdf">
    <i class="fas fa-file-invoice"></i>
</a>
