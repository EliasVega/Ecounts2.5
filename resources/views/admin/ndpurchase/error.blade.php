@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class='rechazado'>
    <h3 style='color:#FA206A'>El STOCK de algunos de los elementos no es suficiente para efectuar la nota debito</h3>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <a href="{{url('purchase')}}" class="btn btn-limon"><i class="fa fa-window-close"></i>&nbsp; Regresar</a>
    </div>
</div>
@endsection
