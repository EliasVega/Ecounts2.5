@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Cerrando aja:&nbsp;&nbsp;&nbsp;&nbsp;  {{ $saleBox->created_at }}</h3>
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
            {!!Form::model($saleBox, ['method'=>'PATCH','route'=>['saleBox.update', $saleBox->id]])!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="userClose_id">Autorizando Cierre saleBox</label>
                            <select name="userClose_id" class="form-control selectpicker" id="userClose_id"
                                data-live-search="true">
                                <option value="" disabled selected>Seleccionar....</option>
                                @foreach($users as $usa)
                                <option value="{{ $usa->id }}">{{ $usa->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" id="valorcito">
                            <label class="form-control-label" for="codverClose">Codigo de verificacion</label>
                            <input type="password" id="codverClose" name="codverClose" value="" class="form-control"
                                placeholder="Codigo Verificacion">
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fas fa-lock"></i>&nbsp; Cerrar saleBox</button>
                            <a href="{{ url('saleBox') }}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
