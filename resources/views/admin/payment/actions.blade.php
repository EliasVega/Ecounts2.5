<a href="{{ route('payment.edit', $id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i>
</a>
<a href="{{ route('payment.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Abono" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('paymentPdf', $id) }}">
    <button class="btn btn-lila" data-toggle="tooltip" data-placement="top" title="Abono pdf"><i class="fas fa-file-invoice"></i></button>
</a>
