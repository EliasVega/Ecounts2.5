
<a href="{{ route('purchase.show', $id) }}">
    <button class="btn btn-lila" data-toggle="tooltip" data-placement="top" title="Ver Compra" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('showndPurchase', $id) }}">
    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Nota Debito"><i class="fas fa-notes-medical"></i></button>
</a>

<a href="{{ route('showncPurchase', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Nota Credito"><i class="far fa-clipboard"></i></button>
</a>

