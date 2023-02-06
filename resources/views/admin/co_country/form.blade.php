<div class="box-body row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="name">Pais</label>
            <input type="text" name="name" value="{{ old('name', $co_country->name ?? '') }}" class="form-control" placeholder="Nombre Departamento">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="code">Codigo</label>
            <input type="text" name="code" value="{{ old('code', $co_country->code ?? '') }}" class="form-control" placeholder="Codigo Pais">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label for="code_phone">codigo Telefonico</label>
            <input type="text" name="code_phone" value="{{ old('code_phone', $co_country->code_phone ?? '') }}" class="form-control" placeholder="Codigo ISO">
        </div>
    </div>
</div>
