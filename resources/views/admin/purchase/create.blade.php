@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <button class="btn btn-celeste btn-md" type="button" data-toggle="modal" data-target="#modal">
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar Proveedor
                </button>
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
            <form action="{{route('purchase.store')}}" method="POST">
                {{csrf_field()}}
            <div class="box-body row">
                <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
                    <div class="form-group">
                        <label for="supplier_id">Proveedor</label>
                        <div class="select">
                            <select name="supplier_id" class="form-control selectpicker" id="supplier_id" data-live-search="true" required>
                                <option value="{{ old('supplier_id') }}" disabled selected>Seleccionar el Proveedor</option>
                                @foreach($suppliers as $sup)
                                    <option value="{{ $sup->id }}">{{ $sup->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="purchase">N°Factura</label>
                        <input type="text" id="purchase" name="purchase" value="{{ old('purchase') }}" class="form-control" placeholder="Numero de la factura" required pattern="[0-9]{0,15}">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
                    <div class="box-danger">
                        <label class="form-control-label"><h4>Agregar Productos</h4></label>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock"  class="form-control" readonly>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="vprice">V/Actual</label>
                        <input type="number" name="vprice" id="vprice"  class="form-control" readonly>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label for="iva">IVA</label>
                        <input type="text" name="iva" id="iva" value="{{ old('iva') }}" class="form-control" placeholder="" readonly>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group row">
                        <label class="form-control-label" for="product_id">Producto</label>
                            <select name="product_id" class="form-control selectpicker" id="product_id" data-live-search="true">
                                <option value="0" disabled selected>Seleccionar el Producto</option>
                                @foreach($products as $pro)
                                    <option value="{{ $pro->id }}_{{ $pro->iva }}_{{ $pro->stock }}_{{ $pro->price }}">{{ $pro->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="quantity">Cantidad</label>
                        <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" class="form-control" placeholder="Ingrese la cantidad" pattern="[0-9]{0,15}">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <label class="form-control-label" for="price">Valor</label>
                        <input type="number" id="price" name="price" value="{{ old('price') }}"  class="form-control" placeholder="Precio de Compra" pattern="[0-9]{0,15}">
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
                                        <th>Producto</th>
                                        <th>precio ($)</th>
                                        <th>Cantidad</th>
                                        <th>iva</th>
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
<!--Inicio del modal agregar-->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                {!!Form::open(array('url'=>'supplier', 'method'=>'Post', 'autocomplete'=>'off'))!!}
                {!!Form::token()!!}
                    @include('admin/purchase.form')
                {!!Form::close()!!}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->
@endsection
@section('scripts')

    <script>

        /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/

        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#supplier_id').select2({
                    theme: "classic",
                    width: "100%",
                });
            });
        });

        jQuery(document).ready(function($){
            $(document).ready(function() {
                $('#product_id').select2({
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
                    $("#municipality_id").append("<option value = '" + response[i].id +"'>" + response[i].nombre + "</option>");
                }
            });
        });

        $(document).ready(function(){
            $("#add").click(function(){
                add();
            });
        });

        var cont=0;
        total=0;
        subtotal=[];
        totalIva=0;
        $("#save").hide();
        $("#product_id").change(productvalue);

        function productvalue(){

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#iva").val(dataProduct[1]);

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#stock").val(dataProduct[2]);

            dataProduct = document.getElementById('product_id').value.split('_');
            $("#vprice").val(dataProduct[3]);
        }

        function add(){

            dataProduct = document.getElementById('product_id').value.split('_');
            product_id= dataProduct[0];
            product= $("#product_id option:selected").text();
            quantity= $("#quantity").val();
            price= $("#price").val();
            iva= $("#iva").val();
            stock= $("#stock").val();
            vprice= $("#vprice").val();



          if(product_id !="" && quantity!="" && price!="" && iva!="" && stock!="" && vprice!=""){

             subtotal[cont]=quantity*price;
             total= total+subtotal[cont];
             ivita= subtotal[cont]*iva/100;
             totalIva=totalIva+ivita;

             var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="removefile('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="product_id[]" value="'+product_id+'">'+product+'</td> <td><input type="hidden" name="price[]"value="'+price+'">'+price+'</td><td><input type="hidden" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" name="iva[]" value="'+iva+'">'+iva+'</td> <td>$'+subtotal[cont]+' </td></tr>';
             cont++;
             totals();

             assess();
             $('#details').append(fila);
             $('#product_id option:selected').remove();
             clean();

            }else{

               // alert("Rellene todos los campos del detalle de la purchase, revise los datos del producto");

                Swal.fire({
                type: 'error',
                //title: 'Oops...',
                text: 'Rellene todos los campos del detalle de la purchases',

                })

            }

     }

     function clean(){

        $("#product_id").val("");
        $("#quantity").val("");
        $("#price").val("");
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

        //totalPay=total+total_iva;
        $("#totalIva_html").html("$ " + totalIva.toFixed(2));
        $("#totalIva").val(totalIva.toFixed(2));

        $("#totalPay_html").html("$ " + totalPay.toFixed(2));
        $("#totalPay").val(totalPay.toFixed(2));

        $("#fila" + index).remove();

        assess();
     }
    </script>
@endsection
