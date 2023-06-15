@if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
    <a href="{{ route('branch.edit', $id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="far fa-edit"></i>
    </a>
    <a href="{{ route('branch.show', $id) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Sucursal"><i class="far fa-eye"></i>
    </a>
@endif


