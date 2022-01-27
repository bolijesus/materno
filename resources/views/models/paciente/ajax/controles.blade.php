<script>

    $(document).ready(function () {
        $('#semanas_embarazo').on('change', function () {            
            controles(this.value);
            primerPaquete(this.value)
            $('#controles').empty();
        });

        function primerPaquete(semanas_embarazo) {
            semanas_embarazo = parseFloat(semanas_embarazo);
            tiene_control = parseInt($('#tiene_control option:selected').val());
            select_control = $('#control option[value="1"]').attr('selected', true);
            
            
            if (tiene_control == 1) {
                if (semanas_embarazo >= 1 && semanas_embarazo <=13.6) {
                    $('#paquete option[value="2"]').attr('selected', true);
                }else if (semanas_embarazo >= 13.7 && semanas_embarazo <=23.6) {
                    $('#paquete option[value="3"]').attr('selected', true);
                } else if(semanas_embarazo > 23.6) {
                    $('#paquete option[value="4"]').attr('selected', true);
                }
            }else{
                if (semanas_embarazo >= 1 && semanas_embarazo <=13.6) {
                    $('#paquete option[value="38"]').attr('selected', true);
                }else if (semanas_embarazo >= 13.7 && semanas_embarazo <=23.6) {
                    $('#paquete option[value="39"]').attr('selected', true);
                } else if(semanas_embarazo > 23.6) {
                    $('#paquete option[value="40"]').attr('selected', true);
                }
            }
            
        }
        function controles(semanas_embarazo){
            tiene_control = parseInt($('#tiene_control option:selected').val());
            $.ajax({
                type: "GET",
                url: "/controles",
                data: {"semanas_embarazo":semanas_embarazo,"con_control":tiene_control},
                success: function (response) {
                    if (response) {
                        let respuesta = JSON.parse(response);
                        tabla_controles(respuesta);
                    }                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });           
            
        }

        function tabla_controles(datos) {  
           console.log(datos);
           if (datos.length == 0 || typeof datos == 'string' ) {
               $('#controles').append('<li>NO HAY PAQUETES PARA ESTAS SEMANAS DE EMBARAZO</li>')
            
            }else{
                for (let index = 0; index < datos.length; index++) {                
                    $('#controles').append('<li>'+datos[index].nombre+'</li>')
                }
            }
            
            
                

        }

        
    });
    

    
    
</script>