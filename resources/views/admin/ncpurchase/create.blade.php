@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h4 class="box-title">Agregar Nota Credito Compra</h4>
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
            <form action="{{route('ncpurchase.store')}}" method="POST">
                {{csrf_field()}}
            <div class="box-body row">
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-12">
                    <div class="form-group">
                        <label for="supplier_id">Id_prov</label>
                        <input type="text" name="supplier_id" value="{{ $purchases->idS }}"
                            class="form-control" placeholder="" readonly>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-9 col-xs-12">
                    <div class="form-group">
                        <label for="">Proveedor</label>
                        <input type="text" name="" value="{{ $purchases->name }}"
                            class="form-control" placeholder="" readonly>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="purchase">No. Factura</label>
                        <input type="text" name="purchase" value="{{ $purchases->purchase }}"
                            class="form-control" placeholder="" readonly>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="iva">Iva</label>
                        <input type="number" id="iva" name="iva" class="form-control" placeholder="Iva"
                            disabled pattern="[0-9]{0,15}">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="stock">Stock</label>
                        <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock"
                            disabled pattern="[0-9]{0,15}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                    <div class="box-danger">
                        <label class="form-control-label"><h4>Agregar Productos</h4></label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="quantityP">Und/compradas</label>
                        <input type="number" id="quantityP" name="quantityP" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group row">
                        <label class="form-control-label" for="product_id">Producto</label>
                            <select name="product_id" class="form-control selectpicker" id="product_id" data-live-search="true">
                                <option value="0" disabled selected>Seleccionar el Producto</option>
                                @foreach($productPurchases as $pp)
                                    <option value="{{ $pp->id }}_{{ $pp->price }}_{{ $pp->stock }}_{{ $pp->quantity }}_{{ $pp->iva }}">{{ $pp->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="price">Precio</label>
                        <input type="number" id="price" name="price" class="form-control" placeholder="Precio"
                            disabled pattern="[0-9]{0,15}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="quantity">Cantidad</label>
                        <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Cantidad" pattern="[0-9]{0,15}">
                    </div>
                </div>




                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label">Add</label><br>
                        <button class="btn btn-grisb" type="button" id="add" data-toggle="tooltip" data-placement="top" title="adicionar"><i class="fas fa-check"></i>&nbsp; </button>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" >Canc</label><br>
                        <a href="{{url('purchase')}}" class="btn btn-grisb" data-toggle="tooltip" data-placement="top" title="Cancelar"><i class="fa fa-window-close"></i>&nbsp; </a>
                    </div>
                </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table id="details" class="table table-striped table-bordered table-condensed table-hover" >
                                <thead class="bg-info">
                                    <tr>
                                        <th>Eliminar</th>
                                        <th>Stock</th>
                                        <th>Producto</th>
                                        <th>Cant</th>
                                        <th>precio ($)</th>
                                        <th>SubTotal ($)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th  colspan="5"><p align="right">TOTAL:</p></th>
                                        <th><p align="right"><span id="total_html">$ 0.00</span>
                                            <input type="hidden" name="total" id="total"> </p></th>
                                    </tr>

                                    <tr>
                                        <th colspan="5"><p align="right">TOTAL IVA:</p></th>
                                        <th><p align="right"><span id="totalIva_html">$ 0.00</span>
                                            <input type="hidden" name="totalIva" id="totalIva"></p></th>
                                    </tr>

                                    <tr>
                                        <th  colspan="5"><p align="right">TOTAL PAGAR:</p></th>
                                        <th><p align="right"><span align="right" id="totalPay_html">$ 0.00</span>
                                            <input type="hidden" name="totalPay" id="totalPay"></p></th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                <div class="modal-footer" id="save">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button class="btn btn-success" type="submit"><i class="fa fa-save fa-2x"></i>&nbsp; Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')

    <script>
        /*
        $(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });
        */
        $(document).ready(function(){
            $("#add").click(function(){
                add();
            });
        });

        cont=0;
        total=0;
        subtotal=[];
        totalIva=0;
        $("#save").hide();
        $("#product_id").change(productValue);

        function productValue(){

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#price").val(dataProduct[1]);

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#stock").val(dataProduct[2]);

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#quantityP").val(dataProduct[3]);

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#iva").val(dataProduct[4]);
        }

        function add(){
            dataProduct = document.getElementById('product_id').value.split('_');
            product_id= dataProduct[0];
            product= $("#product_id option:selected").text();
            quantity= $("#quantity").val();
            price= $("#price").val();
            quantityP = $("#quantityP").val();
            stock= $("#stock").val();
            iva= $("#iva").val();

            if(product_id !="" && quantity!="" && quantity>0 && quantityP != "" && price!="" && stock>"" && iva!=""){

                    subtotal[cont]=quantity*price;
                    total= total+subtotal[cont];
                    ivita= subtotal[cont]*iva/100;
                    totalIva=totalIva+ivita;

                    var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="removefile('+cont+');"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="stock[]"  value="'+stock+'">'+stock+'</td> <td><input type="hidden" name="product_id[]" value="'+product_id+'">'+product+'</td>   <td><input type="hidden" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" name="price[]"  value="'+price+'">'+price+'</td> <td>$'+subtotal[cont]+' </td></tr>';
                    cont++;
                    totals();

                    assess();
                    $('#details').append(fila);
                    $('#product_id option:selected').remove();
                    clean();
            }else{

               // alert("Rellene todos los campos del detalle de la compra, revise los datos del producto");

                Swal.fire({
                type: 'error',
                //title: 'Oops...',
                text: 'Rellene todos los campos del detalle de la compras',

                })

            }

     }


     function clean(){
        $("#product_id").val("");
        $("#quantity").val("");
        $("#quantityP").val("");
        $("#stock").val("");
        $("#iva").val("");


     }

     function totals(){

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        totalPay=total+totalIva;
        $("#totalIva_html").html("$ " + totalIva.toFixed(2));
        $("#totalIva").val(totalIva.toFixed(2));

        $("#totalPay_html").html("$ " + totalPay.toFixed(2));
        $("#totalPay").val(totalPay.toFixed(2));
     }

     function assess(){

         if(total>0){

           $("#save").show();

         } else{

           $("#save").hide();
         }
     }

     function removefile(index){

        total = total-subtotal[index];
        totalIva= total*iva/100;
        totalPay = total + totalIva;

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        totalPay=total+total_iva;
        $("#totalIva_html").html("$ " + totalIva.toFixed(2));
        $("#totalIva").val(totalIva.toFixed(2));

        $("#totalPay_html").html("$ " + totalPay.toFixed(2));
        $("#totalPay").val(totalPay.toFixed(2));

        $("#fila" + index).remove();
        assess();
     }
    </script>
@endsection
