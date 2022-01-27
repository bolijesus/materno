<script>
$(document).ready(function () {
    $('#fecha_ingreso').datepicker().on('changeDate', function (e) {  

        asignar_fecha(this.value);

    });

    function asignar_fecha(fecha) {
        fecha = fecha.split('-');
        dia = parseInt(fecha[0]);
        mes = parseInt(fecha[1]);
        anio = parseInt(fecha[2]);
        fecha_proxima = new Date(anio,mes,dia);

        $('#fecha_proxima').datepicker('update', fecha_proxima);
        
    }
});

</script>