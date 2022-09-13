@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar la company: &nbsp;&nbsp;&nbsp;&nbsp;{{ $company->name }}</h3>
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
            {!!Form::model($company, ['enctype' => "multipart/form-data", 'method'=>'PATCH','route'=>['company.update', $company->id]])!!}
            {!!Form::token()!!}
            <div class="box-body row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="name">name de la company</label>
                        <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Ingrese el name de la company">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                    <label for="department_id">Departamento</label>
                        <select name="department_id" class="form-control" id="department">
                            @foreach($departments as $dep)
                                @if($dep->id == $company->department_id)
                                    <option value="{{ $dep->id }}" selected>{{ $dep->name }}</option>
                                @else
                                    <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="municipality_id">Municipio</label>
                            <select name="municipality_id" class="form-control" id="municipality" required>
                                @foreach($municipalities as $mun)
                                    @if($mun->id == $company->municipality_id)
                                        <option value="{{ $mun->id }}" selected>{{ $mun->name }}</option>
                                    @else
                                        <option value="{{ $mun->id }}">{{ $mun->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                    <label for="liability_id">Res. Fiscal</label>
                        <select name="liability_id" class="form-control" id="liability">
                            @foreach($liabilitys as $lia)
                                @if($lia->id == $company->liability_id)
                                    <option value="{{ $lia->id }}" selected>{{ $lia->name }}</option>
                                @else
                                    <option value="{{ $lia->id }}">{{ $lia->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                    <label for="organization_id">Organizacion</label>
                        <select name="organization_id" class="form-control" id="organization">
                            @foreach($organizations as $org)
                                @if($org->id == $company->organization_id)
                                    <option value="{{ $org->id }}" selected>{{ $org->name }}</option>
                                @else
                                    <option value="{{ $org->id }}">{{ $org->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                    <label for="tax_id">Tributo</label>
                        <select name="tax_id" class="form-control" id="tax">
                            @foreach($taxes as $tax)
                                @if($tax->id == $company->tax_id)
                                    <option value="{{ $tax->id }}" selected>{{ $tax->name }}</option>
                                @else
                                    <option value="{{ $tax->id }}">{{ $tax->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                    <label for="regime_id">Regimen</label>
                        <select name="regime_id" class="form-control" id="regime">
                            @foreach($regimes as $reg)
                                @if($reg->id == $company->regime_id)
                                    <option value="{{ $reg->id }}" selected>{{ $reg->name }}</option>
                                @else
                                    <option value="{{ $rfis->id }}">{{ $rfis->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="nit">Nit</label>
                        <input type="text" name="nit" value="{{ $company->nit }}" class="form-control" placeholder="Nit" required>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="dv">DV</label>
                        <input type="text" name="dv" value="{{ $company->dv }}" class="form-control" placeholder="DV" required>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $company->email }}" class="form-control" placeholder="Ingrese el correo electronico">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="emailfe">Email de Fact Electronica</label>
                        <input type="email" name="emailfe" value="{{ $company->emailfe }}" class="form-control" placeholder="Ingrese el email FE">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="form-group">
                        <label for="logo">Imagen</label>
                        <input type="file" name="logo" class="form-control" id="logo" value="{{ $company->imagen }}" placeholder="Ingresar Imagen">
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
                $('#department').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });
        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#municipality').select2({
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
