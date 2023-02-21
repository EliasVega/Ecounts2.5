@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar producto:  {{ $product->name }}</h3>
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
            </div>
        </div>
    </div>
    {!!Form::model($product, ['method'=>'PATCH','route'=>['product.update', $product->id]])!!}
    {!!Form::token()!!}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="category_id">Categorias</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                        @foreach($categories as $cat)
                                            @if($cat->id == $product->category_id)
                                                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                            @else
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="name">Nombre del product</label>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Ingrese el nombre del product">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="code">Codigo</label>
                                <input type="text" name="code" value="{{ $product->code }}" class="form-control" placeholder="Codigo del product">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="price">Precio de Compra</label>
                                <input type="text" name="price" value="{{ $product->price }}" class="form-control"  readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="sail_price">Precio de Venta</label>
                                <input type="text" name="sail_price" value="{{ $product->sail_price }}" class="form-control" placeholder="Ingrese el Precio del product" readonly>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" name="stock" value="{{ $product->stock }}" class="form-control" placeholder="Ingrese el Stock" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="image">Imagen</label>
                                <input type="file" name="image" value="{{ $product->image }}"  class="form-control" id="image">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-pencil-alt"></i>&nbsp; Actualizar</button>
                                <a href="{{ url('product') }}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!!Form::close()!!}
@endsection
