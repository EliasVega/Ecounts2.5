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
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 vh-30">
        <div>
            <a href="{{ route('branch.index') }}"><button><img src="{{ asset('/img/branch.jpg') }}" height ="120" width="120" data-toggle="tooltip" data-placement="top" title="Sucursales" /></button></a>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 vh-30">
        <div>
            <a href="{{ route('user.index') }}"><button><img src="{{ asset('/img/user.jpg') }}" height ="120" width="120" data-toggle="tooltip" data-placement="top" title="Usuarios" /></button></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div>
            <a href="{{ route('payment_form.index') }}"><button><img src="{{ asset('/img/paymentForm.jpg') }}" height ="150" width="150" data-toggle="tooltip" data-placement="top" title="Forma de Pago" /></button></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div>
            <a href="{{ route('payment_method.index') }}"><button><img src="{{ asset('/img/paymentMethod.jpg') }}" height ="150" width="150" data-toggle="tooltip" data-placement="top" title="Medios de Pago" /></button></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div>
            <a href="{{ route('retention.index') }}"><button><img src="{{ asset('/img/retention.jpg') }}" height ="150" width="150" data-toggle="tooltip" data-placement="top" title="Retenciones" /></button></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 vh-30">
        <div>
            <a href="{{ route('report.index') }}"><button><img src="{{ asset('/img/report.jpg') }}" height ="120" width="120" data-toggle="tooltip" data-placement="top" title="Reportes" /></button></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div>
            <a href="{{ route('verification_code.index') }}"><button><img src="{{ asset('/img/autorization.jpg') }}" height ="120" width="120" data-toggle="tooltip" data-placement="top" title="Autorization de Usuarios" /></button></a>
        </div>
    </div>


    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div>
            <a href="{{ route('bank.index') }}"><button><img src="{{ asset('/img/bank.jpg') }}" height ="150" width="150" data-toggle="tooltip" data-placement="top" title="Bancos" /></button></a>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-5 mt-10">
        <div>
            <a href="{{ route('card.index') }}"><button><img src="{{ asset('/img/cards.jpg') }}" height ="150" width="150" data-toggle="tooltip" data-placement="top" title="Tarjetas" /></button></a>
        </div>
    </div>

</div>
@endsection

