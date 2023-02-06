@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Departamento: {{ $co_department->id }}</h3>
                </div>
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
    {!!Form::model($co_department, ['method'=>'PATCH','route'=>['co_department.update', $co_department->id]])!!}
    {!!Form::token()!!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @include('admin/co_department.form')
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @include('admin/co_department.form_save')
        </div>
    {!!Form::close()!!}
@endsection
@section('scripts')
    @include('admin/co_department.script')
@endsection
