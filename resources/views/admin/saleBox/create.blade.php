@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Abriendo Caja</h3>
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
            <form action="{{route('saleBox.store')}}" method="POST">
                {{csrf_field()}}
                <div class="box-body row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group" id="valorcito">
                            <label class="form-control-label" for="cashBox">Efectivo</label>
                            <input type="number" id="cashBox" name="cashBox" value="" class="form-control"
                                placeholder="Efectivo" pattern="[0-9]{0,15}">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="userOpen_id">Admin Apertura</label>
                            <select name="userOpen_id" class="form-control selectpicker" id="userOpen_id"
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
                            <label class="form-control-label" for="codVerifOpen">Codigo de verificacion</label>
                            <input type="password" id="codVerifOpen" name="codVerifOpen" value="" class="form-control"
                                placeholder="Codigo Verificacion">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                            <a href="{{url('saleBox')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
