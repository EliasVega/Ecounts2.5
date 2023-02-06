<script>
    /*$(document).ready(function(){
        alert('estoy funcionando correctamanete colegio');
    });*/
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#co_country_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });
    jQuery(document).ready(function($){
        $(document).ready(function() {
            $('#co_department_id').select2({
                theme: "classic",
                width: "100%",
            });
        });
    });

    $("#co_country_id").change(function(event){
        $.get("co_department/" + event.target.value + "", function(response){
            $("#co_department_id").empty();
            $("#co_department_id").append("<option value = '#' disabled selected>Seleccionar ...</option>");
            for(i = 0; i < response.length; i++){
                $("#co_department_id").append("<option value = '" + response[i].id +"'>" + response[i].name + "</option>");
            }
            $("#co_department_id").selectpicker('refresh');
        });
    });

</script>
