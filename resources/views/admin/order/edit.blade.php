@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar Orden de Pedido:{{ $order->id }}</h3>
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
    {!!Form::model($order, ['method'=>'PATCH','route'=>['order.update', $order->id]])!!}
    {!!Form::token()!!}
    <div class="row m-1">
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
            @include('admin/order.form_edit')
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
            @include('admin/order.form_pay_edit')
        </div>
    </div>
    {!!Form::close()!!}
    @include('admin/order.editmodal')
@endsection
@section('scripts')
    @include('admin/order.script_edit')
    @include('admin/order.script_pay_edit')
@endsection
