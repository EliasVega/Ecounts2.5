@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <strong>Agregar Pago Anticipado</strong>
            </div>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {!! Form::open(['method' => 'POST', 'route' => 'payment.store', 'autocomplete' => 'off']) !!}
            {!! Form::token() !!}

                <div class="row m-1">
                    @include('admin/payment.form')
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @include('admin/payment.script')
@endsection
