@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>comresa</th>
                        <th>NIT</th>
                        <th>dv</th>
                        <th>Logo</th>
                        @if (Auth::user()->role_id == 1)
                        <th>Ingresar</th>
                        <th>Editar</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $com)
                        <tr>
                            <td>{{ $com->id }}</td>
                            <td>{{ $com->department->name }}</td>
                            <td>{{ $com->municipality->name }}</td>
                            <td>{{ $com->name }}</td>
                            <td>{{ $com->nit }}</td>
                            <td>{{ $com->dv }}</td>
                            <td>
                                <img src="{{ asset('images/logos/'.$com->logo) }}" alt="{{ $com->name }}" style="height:60px; width:80px;" class="img-thumbnail">
                            </td>
                            @if (Auth::user()->role_id == 1)
                            <td>
                                <a href="{{ route('company.show', $com->id) }}" class="btn btn-info btn-sm"> <i class="fa fa-indent"></i> Ingresar </a>
                            </td>
                            <td>
                                <a href="{{ route('company.edit', $com->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="addpayment">
        <div class="form-group">
            <a href="{{ route('branch.index') }}"><button class="btn btn-celeste btn-sm" type="button"  data-toggle="tooltip" data-placement="top" title="Entrar Sucursales" style='width:150px; height:100px; font-size: 24px;'>Sucursales </button></a>

        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="addpayment">
        <div class="form-group">
            <a href="{{ route('user.index') }}"><button class="btn btn-celeste btn-sm" type="button"  data-toggle="tooltip" data-placement="top" title="Entrar Usuarios" style='width:150px; height:100px; font-size: 24px;'>Usuarios </button></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="addpayment">
        <div class="form-group">
            <a href="{{ route('report.index') }}"><button class="btn btn-celeste btn-sm" type="button"  data-toggle="tooltip" data-placement="top" title="Entrar Reportes" style='width:150px; height:100px; font-size: 24px;'>Reportes </button></a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" id="addpayment">
        <div class="form-group">
            <a href="{{ route('verification_code.index') }}"><button class="btn btn-celeste btn-sm" type="button"  data-toggle="tooltip" data-placement="top" title="Autorizar Usuario" style='width:150px; height:100px; font-size: 24px;'>Permisos</button></a>
        </div>
    </div>
</div>
@endsection

