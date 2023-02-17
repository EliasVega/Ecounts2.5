<a href="{{ route('expense.edit', $id) }}">
    <button class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar" ><i class="far fa-edit"></i></button>
</a>
<a href="{{ route('expense.show', $id) }}">
    <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ver Gasto" ><i class="far fa-eye"></i></button>
</a>
<a href="{{ route('show_pdf_expense', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="Gasto pdf"><i class="fas fa-file-pdf"></i></i></button>
</a>
<a href="{{ route('post_expense', $id) }}">
    <button class="btn btn-ver" data-toggle="tooltip" data-placement="top" title="pdf Post" ><i class="fas fa-receipt"></i></button>
</a>
