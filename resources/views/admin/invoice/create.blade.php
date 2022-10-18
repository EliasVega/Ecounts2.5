@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <button class="btn btn-gris btn-md" type="button" data-toggle="modal" data-target="#customer">
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar Cliente
                </button>
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
            <form action="{{route('invoice.store')}}" method="POST">
                {{csrf_field()}}
                <div class="row m-1">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        @include('admin/invoice.form_invoice')
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        @include('admin/invoice.form_pay')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Inicio del modal cliente-->
@include('admin/invoice.customer')
<!--Fin del modal-->
@endsection
@section('scripts')
    @include('admin/invoice.script')
@endsection
