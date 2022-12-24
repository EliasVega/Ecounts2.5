<a href="{{ route('sale_box.edit', $id) }}">
    <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Cerrar Caja" ><i class="fas fa-user-lock"></i></button>
</a>
<a href="{{ route('show_out', $id) }}"
    class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Salida Efectivo"><i class="fas fa-dollar-sign"></i>
</a>
<a href="{{ route('sale_box.show', $id) }}"
    class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="ver caja"><i class="fas fa-eye"></i>
</a>
<a href="{{ route('show_pos', $id) }}"
    class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="Reporte Caja"><i class="fas fa-newspaper"></i>
</a>
<a href="{{ route('show_close', $id) }}"
    class="btn btn-gris" data-toggle="tooltip" data-placement="top" title="Cierre de caja"><i class="fas fa-newspaper"></i>
</a>
