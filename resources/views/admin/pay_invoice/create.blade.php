@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h2>Agregar Abono</h2>
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
            <form action="{{route('pay_invoice.store')}}" method="POST">
                {{csrf_field()}}
                <div class="box-body row">
                    @include('admin/pay_invoice.form')
                    @include('admin/pay_invoice.pay')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @include('admin/pay_invoice.script')
@endsection
