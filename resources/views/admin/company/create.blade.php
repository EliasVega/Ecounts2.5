@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar company</h3>
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
            {!!Form::open(array('url'=>'company', 'method'=>'POST', 'autocomplete'=>'off', 'enctype' => 'multipart/form-data'))!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name" class="form-control-label">name de la company</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="department_id">Departamento</label>
                            <select name="department_id" class="form-control" data-live-search="true" id="department_id" required>
                                <option value="{{ old('department_id') }}" disabled selected>Seleccionar.</option>
                                @foreach($departments as $dep)
                                    <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="municipality_id" class="form-control-label">Municipio</label>
                            <select name="municipality_id" class="form-control" id="municipality_id" required>
                                <option value ="" disabled selected>Seleccionar...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="liability_id">Resp. Fiscal</label>
                            <select name="liability_id" class="form-control" data-live-search="true" id="department" required>
                                <option value="{{ old('liability_id') }}" disabled selected>Seleccionar.</option>
                                @foreach($liabilitys as $lia)
                                    <option value="{{ $lia->id }}">{{ $lia->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="organization_id">T. Organizacion</label>
                            <select name="organization_id" class="form-control" data-live-search="true" id="organization" required>
                                <option value="{{ old('organization_id') }}" disabled selected>Seleccionar.</option>
                                @foreach($organizations as $org)
                                    <option value="{{ $org->id }}">{{ $org->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="tax_id">Tributo</label>
                            <select name="tax_id" class="form-control" data-live-search="true" id="tax" required>
                                <option value="{{ old('tax_id') }}" disabled selected>Seleccionar.</option>
                                @foreach($taxes as $tax)
                                    <option value="{{ $tax->id }}">{{ $tax->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="regime_id">Regimen</label>
                            <select name="regime_id" class="form-control" data-live-search="true" id="regime" required>
                                <option value="{{ old('regime_id') }}" disabled selected>Seleccionar.</option>
                                @foreach($regimes as $reg)
                                    <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="nit">Nit</label>
                            <input type="text" name="nit" value="{{ old('nit') }}" class="form-control" placeholder="Nit" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-12">
                        <div class="form-group">
                            <label for="dv">DV</label>
                            <input type="text" name="dv" value="{{ old('dv') }}" class="form-control" placeholder="DV" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Ingrese el correo electronico">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="emailfe">Email de Fact Electronica</label>
                            <input type="email" name="emailfe" value="{{ old('emailfe') }}" class="form-control" placeholder="Ingrese el email FE">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                        <div class="form-group">
                            <label for="logo" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Logo</label>
                                <input type="file" name="logo" class="form-control" id="logo" placeholder="Ingresar Logo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                            <a href="{{url('company')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        /*$(document).ready(function(){
            alert('estoy funcionando correctamanete colegio');
        });*/
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#department_id').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#municipality_id').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });
        $("#department").change(function(event){
            $.get("create/" + event.target.value + "", function(response){
                $("#municipality").empty();
                $("#municipality").append("<option value = '#' disabled selected>Seleccionar ...</option>");
                for(i = 0; i < response.length; i++){
                    $("#municipality").append("<option value = '" + response[i].id +"'>" + response[i].name + "</option>");
                }
            });
        });

    </script>
@endsection
