<script>
    /*$(document).ready(function(){
            alert('estoy funcionando correctamanete empresa');
        });*/
    $("#account_class_id").change(function(event){
        $.get("AccountGroup/" + event.target.value + "", function(response){
            $("#account_group_id").empty();
            $("#account_group_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#account_group_id").append("<option value = '" + response[i].id +"'>" + response[i].code + "  " + response[i].name + "</option>");
            }
            $("#account_group_id").selectpicker('refresh');
        });
    });

    $("#account_group_id").change(function(event){
        $.get("Account/" + event.target.value + "", function(response){
            $("#account_id").empty();
            $("#account_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#account_id").append("<option value = '" + response[i].id +"'>" + response[i].code + " " + response[i].name + "</option>");
            }
            $("#account_id").selectpicker('refresh');
        });
    });
    $("#account_id").change(function(event){
        $.get("Subaccount/" + event.target.value + "", function(response){
            $("#subaccount_id").empty();
            $("#subaccount_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#subaccount_id").append("<option value = '" + response[i].id +"'>" + response[i].code + " " + response[i].name + "</option>");
            }
            $("#subaccount_id").selectpicker('refresh');
        });
    });
    $("#subaccount_id").change(function(event){
        $.get("AuxAccount/" + event.target.value + "", function(response){
            $("#auxiliary_account").empty();
            $("#auxiliary_account").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#auxiliary_account").append("<option value = '" + response[i].id +"'>" + response[i].code + " " + response[i].name + "</option>");
            }
            $("#auxiliary_account_id").selectpicker('refresh');
        });
    });
</script>
