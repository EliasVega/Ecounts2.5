<script>
    /*$(document).ready(function(){
        alert('estoy funcionando correctamante empresa');
    });*/

        /*
    $(document).ready(function(){
        $("#updatePurchase").click(function(){
            editrow();
        });
    });*/

    let cont = 0;
    let subtotal = [];
    let total = 0;
    let total_iva = 0;
    $("#save").hide();
    $("#idProvider").hide();
    $("#addVpay").hide();
    function totals(){

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        total_pay=total+total_iva;
        $("#total_iva_html").html("$ " + total_iva.toFixed(2));
        $("#total_iva").val(total_iva.toFixed(2));

        $("#total_pay_html").html("$ " + total_pay.toFixed(2));
        $("#total_pay").val(total_pay.toFixed(2));

    }
    function assess(){

        if(total>=0){

        $("#save").show();

        } else{

        $("#save").hide();
        }
    }

    ndpurchase = {!! json_encode($productPurchases) !!};
    ndpurchase.forEach((value, i) => {
        if (value['quantity'] > 0) {
            product= value['name'];
            quantity= value['quantity'];
            price= value['price'];
            iva_rate= value['iva'];

            subtotal[cont]= parseFloat(quantity) * parseFloat(price);
            total = total+subtotal[cont];
            ivita = subtotal[cont]*iva_rate/100;
            total_iva = total_iva+ivita;

            var row= '<tr class="selected" id="row'+cont+'"></td><td><input type="hidden" name="product[]" value="'+product+'">'+product+'</td>   <td><input type="hidden" name="quantity[]" value="'+quantity+'">'+quantity+'</td> <td><input type="hidden" name="price[]"  value="'+price+'">'+price+'</td><td>$'+subtotal[cont]+' </td></tr>';

            cont++;

            totals();
            assess();
            $('#details').append(row);

            $('#product_id option:selected').remove();
        }
    });
    $(document).ready(function(){
        $("#Vreverse").keyup(function(){
            $("#Vreverse").val();
            payment();
        });
    });
    function payment(){
        pay = parseFloat($("#Vpay").val())
        payCash = parseFloat($("#Vreverse").val())
        abn = pay - payCash;
        if (abn < 0) {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'El abono supera el valor de los pagos a esta factura',
            })
            $("#Vreverse").val(0)
            payment();
        }
    }
</script>
