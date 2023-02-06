<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#payment_method_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#bank_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#card_id').select2({
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
        $("#payment_method_id").change(function(){
        method = $("#payment_method_id").val();
        if(method == 10){
            payCash();
        }else{
            everyPay();
        }
        });
    });

    $(document).ready(function(){
        $("#pay").keyup(function(){
            $("#pay").val();
            payment();
        });
    });

    var cont=0;
    total=0;
    payu = [];
    $("#save").hide();
    $("#banky").hide();
    $("#cardy").hide();
    $("#transactiony").hide();

    function add(){

        payment_method_id = $("#payment_method_id").val();
        payment_method    = $("#payment_method_id option:selected").text();
        bank_id     = $("#bank_id").val();
        bank        = $("#bank_id option:selected").text();
        card_id   = $("#card_id").val();
        card      = $("#card_id option:selected").text();
        pay        = $("#pay").val();
        transaction  = $("#transaction").val();
        pendient    = $("#pendient").val();

        if(payment_method_id == 10){
            bank_id    = 1;
            bank       = 'N/A';
            card_id  = 1;
            card     = 'N/A';
            transaction = 'Efectivo'
        }
        if(payment_method_id != 48 && payment_method_id != 49){
            card_id  = 1;
            card     = 'N/A';
        }

        if(payment_method_id !="" && bank_id!="" && card_id!=""  && pay!="" && pay>0 && transaction!=""){

            total = parseFloat(total) + parseFloat(pay);
            rbalance = parseFloat(pendient)-pay;
            payu[cont]=parseFloat(pay);
            pendient = parseFloat(pendient);

            if (pendient >= total) {
                var fila= '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="payment_method_id[]" value="'+payment_method_id+'">'+payment_method+'</td> <td><input type="hidden" name="card_id[]" value="'+card_id+'">'+card+'</td> <td><input type="hidden" name="bank_id[]" value="'+bank_id+'">'+bank+'</td> <td><input type="hidden" name="transaction[]" value="'+transaction+'">'+transaction+'</td> <td class="tdder"><input type="hidden" name="pay[]" value="'+pay+'">'+pay+'</td>  </tr>';
                cont++;

                totals();
                assess();
                $('#details').append(fila);
                clean();
            } else {
                total = parseFloat(total) - parseFloat(pay);
                //alert("Rellene todos los campos del detalle de la venta");
                Swal.fire({
                    type: 'error',
                    //title: 'Oops...',
                    text: 'Abono supera el saldo de la Compra',
                });
            }
        } else {
            //alert("Rellene todos los campos del detalle de la venta");
            Swal.fire({
            type: 'error',
            //title: 'Oops...',
            text: 'Faltan campos por llenar',
            });
        }
    }
    function clean(){
        $("#pay").val("");
        $("#payment_method_id").val("");
        $("#bank_id").val("");
        $("#card_id").val("");
        $("#transaction").val("");
    }
    function totals(){

        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));
        $("#pendient").val(rbalance);
    }
    function assess(){

        if(total>0){

            $("#save").show();

        } else{

            $("#save").hide();
        }
    }
    function eliminar(index){
        pendient = $("#pendient").val();
        pendient = parseFloat(pendient) + payu[index];
        total = total - payu[index];
        $("#total_html").html("$ " + total.toFixed(2));
        $("#total").val(total.toFixed(2));

        $("#fila" + index).remove();
        $("#pendient").val(pendient);
        assess();
    }
    function payCash(){
        $("#banky").hide();
        $("#cardy").hide();
        $("#transactiony").hide();
    }

    function everyPay(){
        $("#banky").show();
        $("#cardy").show();
        $("#transactiony").show();
        $("#pay_eventy").hide();
    }
    function payment(){
        ttp = parseFloat($("#pendient").val())
        abn = parseFloat($("#pay").val())
        balancey = ttp - abn;
        if (ttp >= abn) {
            $("#rbalance").val(balancey);
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
