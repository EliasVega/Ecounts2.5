@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar Cliente</h3>
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
            {!!Form::open(array('url'=>'customer', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
            <div class="box-body row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="name">Nombre del Cliente</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Ingrese el nombre del Cliente">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="department_id">Departamentos</label>
                        <select name="department_id" class="form-control selectpicker" data-live-search="true" id="department_id" required>
                            <option value="{{ old('department_id') }}" disabled selected>Seleccionar.</option>
                            @foreach($departments as $dep)
                                <option value="{{ $dep->id }}">{{ $dep->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="municipality_id">Municipio</label>
                        <select name="municipality_id" class="form-control" id="municipality_id" required>
                            <option value ="" disabled selected>Seleccionar...</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="document_id">Tipo Identificacion</label>
                        <select name="document_id" class="form-control selectpicker" data-live-search="true" id="document_id" required>
                            <option value="{{ old('document_id') }}" disabled selected>Seleccionar.</option>
                            @foreach($documents as $doc)
                                <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="number">Numero</label>
                        <input type="text" name="number" value="{{ old('number') }}" class="form-control" placeholder="Identificacion">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="dv">DV</label>
                        <input type="text" name="dv" value="{{ old('dv') }}" class="form-control" placeholder="DV">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="address">Direccion</label>
                        <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Direccion">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="phone">Numero de Telefono</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Telefono">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Correo electronico">
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="liability_id">Responsabilidad fiscal</label>
                        <select name="liability_id" class="form-control selectpicker" data-live-search="true" id="liability_id" required>
                            <option value="{{ old('liability_id') }}" disabled selected>Seleccionar.</option>
                            @foreach($liabilities as $fis)
                                <option value="{{ $fis->id }}">{{ $fis->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="organization_id">Tipo Organizacion</label>
                        <select name="organization_id" class="form-control selectpicker" data-live-search="true" id="organization_id" required>
                            <option value="{{ old('organization_id') }}" disabled selected>Seleccionar.</option>
                            @foreach($organizations as $org)
                                <option value="{{ $org->id }}">{{ $org->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="tax_id">Tributo</label>
                        <select name="tax_id" class="form-control selectpicker" data-live-search="true" id="tax_id" required>
                            <option value="{{ old('tax_id') }}" disabled selected>Seleccionar.</option>
                            @foreach($taxes as $tax)
                                <option value="{{ $tax->id }}">{{ $tax->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="regime_id">Responsabilidad fiscal 2</label>
                        <select name="regime_id" class="form-control selectpicker" data-live-search="true" id="regime_id" required>
                            <option value="{{ old('regime_id') }}" disabled selected>Seleccionar.</option>
                            @foreach($regimes as $reg)
                                <option value="{{ $reg->id }}">{{ $reg->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="credit_limit">Cupo</label>
                        <input type="number" name="credit_limit" value="{{ old('credit_limit') }}" class="form-control" placeholder="Cupo asignado">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                        <a href="{{url('customer')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
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
        $("#department_id").change(function(event){
            $.get("create/" + event.target.value + "", function(response){
                $("#municipality_id").empty();
                $("#municipality_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
                for(i = 0; i < response.length; i++){
                    $("#municipality_id").append("<option value = '" + response[i].id +"'>" + response[i].name + "</option>");
                }
                $("#municipality_id").selectpicker('refresh');
            });
        });

    </script>
@endsection
