@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h5>Cerrando Caja: {{ $sale_box->created_at }}</h5>
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
            {!!Form::model($sale_box, ['method'=>'PATCH','route'=>['sale_box.update', $sale_box->id]])!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label class="form-control-label" for="quantity">Cantidad</label>
                            <input type="number" id="quantity" name="quantity" value=""
                                class="form-control" placeholder="Cantidad" pattern="[0-9]{0,15}">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-celeste btn-md" type="submit"><i class="fas fa-lock"></i>&nbsp; Cerrar sale_box</button>
                            <a href="{{ url('sale_box') }}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
