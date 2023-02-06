<div class="box-body row">
    <div class="col-12 col-md-12">
        <label for="account_class_id">Clase Cuenta</label>
        <div class="select">
            <select id="account_class_id" name="account_class_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($auxiliary_account->subaccount->account->account_group->account_class_id ?? '') == '' ? "selected" : "" }} disabled>Clase Cuenta</option>
                @foreach($account_classes as $account_class)
                    @if($account_class->id == ($auxiliary_account->subaccount->account->account_group->account_class_id ?? ''))
                        <option value="{{ $account_class->id }}" selected>{{ $account_class->code }} - {{ $account_class->name }}</option>
                    @else
                        <option value="{{ $account_class->id }}">{{ $account_class->code }} - {{ $account_class->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-12 col-md-12">
        <label for="account_group_id">Grupo Cuenta</label>
        <div class="select">
            <select id="account_group_id" name="account_group_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($auxiliary_account->subaccount->account->account_group_id ?? '') == '' ? "selected" : "" }} disabled>Grupo Cuenta</option>
                @foreach($account_groups as $account_group)
                    @if($account_group->id == ($auxiliary_account->subaccount->account->account_group_id ?? ''))
                        <option value="{{ $account_group->id }}" selected>{{ $account_group->code }} - {{ $account_group->name }}</option>
                    @else
                        <option value="{{ $account_group->id }}">{{ $account_group->code }} - {{ $account_group->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-12 col-md-12">
        <label for="account_id">Cuenta</label>
        <div class="select">
            <select id="account_id" name="account_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($auxiliary_account->subaccount->account_id ?? '') == '' ? "selected" : "" }} disabled>Cuenta</option>
                @foreach($accounts as $account)
                    @if($account->id == ($auxiliary_account->subaccount->account_id ?? ''))
                        <option value="{{ $account->id }}" selected>{{ $account->code }} - {{ $account->name }}</option>
                    @else
                        <option value="{{ $account->id }}">{{ $account->code }} - {{ $account->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-12 col-md-12">
        <label for="subaccount_id">SubCuenta</label>
        <div class="select">
            <select id="subaccount_id" name="subaccount_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($auxiliary_account->subaccount_id ?? '') == '' ? "selected" : "" }} disabled>Cuenta</option>
                @foreach($subaccounts as $subaccount)
                    @if($subaccount->id == ($auxiliary_account->subaccountt_id ?? ''))
                        <option value="{{ $subaccount->id }}" selected>{{ $subaccount->code }} - {{ $subaccount->name }}</option>
                    @else
                        <option value="{{ $subaccount->id }}">{{ $subaccount->code }} - {{ $subaccount->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="code">Codigo</label>
            <input type="number" name="code" value="{{ old('code', $subaccount->code ?? '') }} '00" class="form-control" placeholder="Ej: 1....12....21">
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Nombre Cuenta Auxiliar</label>
            <input type="text" name="name" value="{{ old('name', $subaccount->name ?? '') }}" class="form-control" placeholder="Nombre de la Subcuenta">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="auxiliary_account" class="form-control-label">Numero Cuenta aux Usado</label>
            <select name="auxiliary_account" class="form-control" id="auxiliary_account">
                <option value ="" disabled selected>Seleccionar...</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a href="{{url('auxiliary_account')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
    </div>
</div>
