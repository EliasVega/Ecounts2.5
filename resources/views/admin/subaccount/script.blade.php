<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/
    $("#account_class_id").change(function(event){
        $.get("getAccountGroup/" + event.target.value + "", function(response){
            $("#account_group_id").empty();
            $("#account_group_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#account_group_id").append("<option value = '" + response[i].id +"'>" + response[i].code + "  " + response[i].name + "</option>");
            }
            $("#account_group_id").selectpicker('refresh');
        });
    });

    $("#account_group_id").change(function(event){
        $.get("getAccount/" + event.target.value + "", function(response){
            $("#account_id").empty();
            $("#account_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#account_id").append("<option value = '" + response[i].id +"'>" + response[i].code + " " + response[i].name + "</option>");
            }
            $("#account_id").selectpicker('refresh');
        });
    });
    $("#account_id").change(function(event){
        $.get("getSubaccount/" + event.target.value + "", function(response){
            $("#subaccount").empty();
            $("#subaccount").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#subaccount").append("<option value = '" + response[i].id +"'>" + response[i].code + " " + response[i].name + "</option>");
            }
            $("#subaccount_id").selectpicker('refresh');
        });
    });
</script>
