<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/
    $("#department_id").change(function(event){
        $.get("create/" + event.target.value + "", function(response){
            $("#municipality_id").empty();
            $("#municipality_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#municipality_id").append("<option value = '" + response[i].id +"'>" + response[i].name + "</option>");
            }
        });
    });
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

    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#payment_method_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    $(document).ready(function(){
        $("#add").click(function(){
            add();
        });
    });

    $(document).ready(function(){
        $("#cash").click(function(){
            $("#pay").val("");
            pay_cash();
        });
    });

    $(document).ready(function(){
        $("#card").click(function(){
            $("#pay").val("");
            pay_card();
        });
    });

    $(document).ready(function(){
        $("#transfer").click(function(){
            $("#pay").val("");
            pay_transaction();
        });
    });

    $(document).ready(function(){
        $("#nequi").click(function(){
            $("#pay").val("");
            pay_nequi();
        });
    });

    $(document).ready(function(){
        $("#pay").keyup(function(){
            $("#pay").val();
            payment();
        });
    });

    $(document).ready(function(){
        $("#transvenped").click(function(){
            $("#pay").val("");
            pay_order_purchase();
        });
    });

    var cont=0;
    total=0;
    subtotal=[];
    total_iva=0;
    ret = 0;
    $("#save").hide();
    $("#payi").hide();
    $("#transactiony").hide();
    $("#banky").hide();
    $("#cardy").hide();
    $("#abpaymenty").hide();
    $("#idPro").hide();


    $("#product_id").change(productValue);

    function productValue(){
        dataProduct = document.getElementById('product_id').value.split('_');
        $("#iva").val(dataProduct[1]);
        $("#stock").val(dataProduct[2]);
        $("#vprice").val(dataProduct[3]);
        $("#price").val(dataProduct[3]);
    }

    function add(){

        dataProduct = document.getElementById('product_id').value.split('_');
        product_id= dataProduct[0];
        product= $("#product_id option:selected").text();
        quantity= $("#quantity").val();
        price= $("#price").val();
        stock= $("#stock").val();
        iva= $("#iva").val();
        pay = $("#pay").val();
        if(product_id !="" && quantity!="" && quantity>0  && price!=""){


            subtotal[cont]= parseFloat(quantity) * parseFloat(price);
            total= total+subtotal[cont];
            ivita= subtotal[cont]*iva/100;
            total_iva=total_iva+ivita;

            var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="product_id[]" value="'+product_id+'">'+product+'</td> <td><input type="hidden" id="quantity" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" id="price" name="price[]" value="'+parseFloat(price).toFixed(2)+'">'+price+'</td> td> <td><input type="hidden" name="iva[]" value="'+iva+'">'+iva+'</td>  <td class="tdder"> $'+parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
            cont++;

            totals();
            assess();
            $('#details').append(fila);
            $('#product_id option:selected').remove();
            clean();


        }else{
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Rellene todos los campos del detalle de la venta',
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

        total_pay=total+total_iva;
        $("#total_iva_html").html("$ " + total_iva.toFixed(2));
        $("#total_iva").val(total_iva.toFixed(2));

        $("#total_pay_html").html("$ " + total_pay.toFixed(2));
        $("#total_pay").val(total_pay.toFixed(2));

        $("#balance").val(total_pay.toFixed(2));
    }


    function assess(){

        if(total>0){

        $("#save").show();

        } else{
            $("#save").hide();
        }
    }

    function eliminar(index){

        total = total-subtotal[index];
        total_iva= total*iva/100;
        total_pay = total + total_iva;

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        total_pay=total+total_iva;
        $("#total_iva_html").html("$ " + total_iva.toFixed(2));
        $("#total_iva").val(total_iva.toFixed(2));

        $("#total_pay_html").html("$ " + total_pay.toFixed(2));
        $("#total_pay").val(total_pay.toFixed(2));

        $("#fila" + index).remove();
        assess();
    }

    function pay_cash(){
        $("#payment_method_id").val(1);
        $("#transaction").val("N/A");
        $("#bank_id").val(1);
        $("#card_id").val(1);
        $("#transactiony").hide();
        $("#banky").hide();
        $("#cardy").hide();
        $("#mpay").hide();
        $("#payi").show();
        $("#abpaymenty").hide();
    }

    function pay_card(){
        $("#payment_method_id").val(2);
        $("#abpaymenty").hide();
        $("#mpay").hide();
        $("#eventy").hide();
        $("#payi").show();
        $("#banky").show();
        $("#cardy").show();
        $("#transactiony").show();
    }

    function pay_transaction(){
        $("#payment_method_id").val(3);
        $("#card_id").val(1);
        $("#payi").show();
        $("#abpaymenty").hide();
        $("#transactiony").show();
        $("#banky").show();
        $("#cardy").hide();
        $("#mpay").hide();
    }

    function pay_nequi(){
        $("#payment_method_id").val(4);
        $("#bank_id").val(2);
        $("#card_id").val(1);
        $("#payi").show();
        $("#abpaymenty").hide();
        $("#transactiony").show();
        $("#cardy").hide();
        $("#mpay").hide();
        $("#banky").hide();
    }

    function pay_order_purchase(){
        $("#payment_method_id").val(1);
        $("#transaction").val("N/A");
        $("#bank_id").val(1);
        $("#card_id").val(1);
        $("#payi").hide();
        $("#abpaymenty").show();
        $("#transactiony").hide();
        $("#cardy").hide();
        $("#mpay").hide();
        $("#banky").hide();
    }

    function payment(){
        ttp = parseFloat($("#total_pay").val())
        abn = parseFloat($("#pay").val())
        balancey = ttp - abn;
        if (ttp >= abn) {
            $("#returned").val(balancey);
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El abono supera el valor de la compra',
            })
            $("#pay").val(0)
            payment();
        }
    }
</script>
