<a href="{{ route('saleBox.edit', $id) }}">
    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Cerrar Caja" ><i class="fas fa-user-lock"></i></button>
</a>
<a href="{{ route('showOut', $id) }}"
    class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Salida Efectivo"><i class="fas fa-dollar-sign"></i>
</a>
<a href="{{ route('saleBox.show', $id) }}"
    class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="ver caja"><i class="fas fa-eye"></i>
</a>
<a href="{{ route('showPos', $id) }}"
    class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Reporte Caja"><i class="fas fa-newspaper"></i>
</a>
