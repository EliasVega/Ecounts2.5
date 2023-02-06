<div class="box-body row">
    <div class="col-12 col-md-12">
        <label for="co_country_id">Pais</label>
        <div class="select">
            <select id="co_country_id" name="co_country_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($co_municipality->co_department->co_country_id ?? '') == '' ? "selected" : "" }} disabled>Pais</option>
                @foreach($co_countries as $co_country)
                    @if($co_country->id == ($co_municipality->co_department->co_country_id ?? ''))
                        <option value="{{ $co_country->id }}" selected>{{ $co_country->name }}</option>
                    @else
                        <option value="{{ $co_country->id }}">{{ $co_country->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-12 col-md-12">
        <label for="co_department_id">Departamento</label>
        <div class="select">
            <select id="co_department_id" name="co_department_id" class="form-control selectpicker" data-live-search="true" required>
                <option {{ ($co_municipality->co_department->id ?? '') == '' ? "selected" : "" }} disabled>Departamento</option>
                @foreach($co_departments as $co_department)
                    @if($co_department->id == ($co_municipality->co_department->id ?? ''))
                        <option value="{{ $co_department->id }}" selected>{{ $co_department->name }}</option>
                    @else
                        <option value="{{ $co_department->id }}">{{ $co_department->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-12 col-md-12">
        <div class="form-group">
            <label for="name">Municipio</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $co_municipality->name ?? '') }}" placeholder="municipio">
        </div>
    </div>
</div>
