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
            $('#customer_id').select2({
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

    $(document).ready(function(){
        $("#rtfon").click(function(){
            $("#retentiony").show();
            $("#rtferase").show();
        });
    });

    $(document).ready(function(){
        $("#rtfoff").click(function(){
            $("#retentiony").hide();
            $("#rtferase").hide();
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
            payCash();
        });
    });

    $(document).ready(function(){
        $("#card").click(function(){
            $("#pay").val("");
            payCard();
        });
    });

    $(document).ready(function(){
        $("#transfer").click(function(){
            $("#pay").val("");
            payTransaction();
        });
    });

    $(document).ready(function(){
        $("#nequi").click(function(){
            $("#pay").val("");
            payNequi();
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
            payOrderInvoice();
        });
    });

    var cont=0;
    total=0;
    subtotal=[];
    totalIva=0;
    ret = 0;
    $("#save").hide();
    $("#retentiony").hide();
    $("#rtferase").hide();
    $("#payi").hide();
    $("#transactiony").hide();
    $("#banky").hide();
    $("#cardy").hide();
    $("#eventy").hide();
    $("#abvto").hide();
    $("#abpaymenty").hide();
    $("#idPro").hide();
    $("#porcentage").val(0);



    $("#product_id").change(productValue);

    function productValue(){
        dataProduct = document.getElementById('product_id').value.split('_');
        $("#stock").val(dataProduct[1]);
        dataProduct = document.getElementById('product_id').value.split('_');
        $("#salePrice").val(dataProduct[2]);
        dataProduct = document.getElementById('product_id').value.split('_');
        $("#iva").val(dataProduct[3]);
        dataProduct = document.getElementById('product_id').value.split('_');
        $("#idP").val(dataProduct[4]);
        dataProduct = document.getElementById('product_id').value.split('_');
        $("#suggested_price").val(dataProduct[2]);
    }

    $("#retention_id").change(retentionVer);

    function retentionVer(){
        dataRetention = document.getElementById('retention_id').value.split('_');
        $("#retention_id").val(dataRetention[0]);
        $("#porcentage").val(dataRetention[1]);
    }


    $("#payEvent_id").change(DocumentValue);

    function documentValue(){

        dataDocument = document.getElementById('payEvent_id').value.split('_');
        $("#abv").val(dataDocument[0]);
        $("#pay").val(dataDocument[1]);
        $("#abpayment").val(dataDocument[2]);
    }

    function add(){

        dataProduct = document.getElementById('product_id').value.split('_');
        product_id= dataProduct[0];
        product= $("#product_id option:selected").text();
        quantity= $("#quantity").val();
        price= $("#salePrice").val();
        stock= $("#stock").val();
        iva= $("#iva").val();
        idp= $("#idP").val();
        idps= idp.toString();
        retention = $("#retention").val();

        dataRetention = document.getElementById('retention_id').value.split('_');
        retention_id= dataRetention[0];
        porcentage = $("#porcentage").val();
        dataDocument = document.getElementById('payEvent_id').value.split('_');
        payEvent_id= dataDocument[0];
        pay = $("#pay").val();
        if(product_id !="" && quantity!="" && quantity>0  && price!="" && stock!="" && iva!=""){

            if (parseFloat(quantity) > parseFloat(stock) ) {
                //alert("Rellene todos los campos del detalle de la venta");
                Swal.fire({
                type: 'error',
                //title: 'Oops...',
                text: 'La cantidad a vender supera el stock',
            })
            } else {


                subtotal[cont]= parseFloat(quantity) * parseFloat(price);
                total= total+subtotal[cont];
                ivita= subtotal[cont]*iva/100;
                totalIva=totalIva+ivita;

                var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="idP[]" value="'+idp+'">'+idp+'</td> <td><input type="hidden" name="product_id[]" value="'+product_id+'">'+product+'</td> <td><input type="hidden" id="quantity" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" id="price" name="price[]" value="'+parseFloat(price).toFixed(2)+'">'+price+'</td> td> <td><input type="hidden" name="iva[]" value="'+iva+'">'+iva+'</td>  <td> $'+parseFloat(subtotal[cont]).toFixed(2)+'</td></tr>';
                cont++;

                totals();
                /*
                $("#total").html("$ " + total.toFixed(2));
                $("#total_venta").val(total.toFixed(2));*/
                assess();
                $('#details').append(fila);
                $('#product_id option:selected').remove();
                clean();
            }

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
        $("#salePrice").val("");
        $("#idP").val("");

    }

    function totals(){
        rte = parseFloat($("#porcentage").val());
        vrte = total*rte/100;

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        totalPay=total+totalIva;
        $("#totalIva_html").html("$ " + totalIva.toFixed(2));
        $("#totalIva").val(totalIva.toFixed(2));

        totalPay = totalPay - vrte;
        $("#retention_html").html("$ " + vrte.toFixed(2));
        $("#retencion").val(vrte.toFixed(2));

        $("#totalPay_html").html("$ " + totalPay.toFixed(2));
        $("#totalPay").val(totalPay.toFixed(2));

        $("#balance").val(totalPay.toFixed(2));
    }


    function assess(){

        if(total>0){

        $("#save").show();
        $("#retentiony").hide();
        //$("#retefuente_id").attr('disabled','disabled');
        //$("#retefuente_id").removeattr('disabled','disabled');
        $("#rtfon").attr('disabled','disabled');
        $("#rtfoff").attr('disabled','disabled');

        } else{
            $("#save").hide();
        }
    }

    function eliminar(index){

        total = total-subtotal[index];
        totalIva= total*iva/100;
        totalPay = total + totalIva;

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        totalPay=total+totalIva;
        $("#totalIva_html").html("$ " + totalIva.toFixed(2));
        $("#totalIva").val(totalIva.toFixed(2));

        $("#totalPay_html").html("$ " + totalPay.toFixed(2));
        $("#totalPay").val(totalPay.toFixed(2));

        $("#fila" + index).remove();
        assess();
    }



    function retentions(){
        $("#retentiony").show();
        totalrte();
    }

    function retentionValue(){
        $("#retention").show();
    }

    function payCash(){
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
        $("#eventy").hide();
    }

    function payCard(){
        $("#payment_method_id").val(2);
        $("#abpaymenty").hide();
        $("#mpay").hide();
        $("#eventy").hide();
        $("#payi").show();
        $("#banky").show();
        $("#cardy").show();
        $("#transactiony").show();
    }

    function payTransaction(){
        $("#payment_method_id").val(3);
        $("#card_id").val(1);
        $("#payi").show();
        $("#abpaymenty").hide();
        $("#transactiony").show();
        $("#banky").show();
        $("#cardy").hide();
        $("#mpay").hide();
        $("#eventy").hide();
    }

    function payNequi(){
        $("#payment_method_id").val(4);
        $("#bank_id").val(2);
        $("#card_id").val(1);
        $("#payi").show();
        $("#abpaymenty").hide();
        $("#transactiony").show();
        $("#cardy").hide();
        $("#mpay").hide();
        $("#banky").hide();
        $("#eventy").hide();
    }

    function payOrderInvoice(){
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
        $("#eventy").show();
    }

    function payment(){
        ttp = parseFloat($("#totalPay").val())
        abn = parseFloat($("#pay").val())
        balancey = ttp - abn;
        if (ttp >= abn) {
            $("#returned").val(balancey);
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El abono supera el valor de la venta',
            })
            $("#pay").val(0)
            payment();
        }
    }
</script>
