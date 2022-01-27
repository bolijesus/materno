$(function () {
    //Bootstrap datepicker plugin
    
    //Bootstrap datepicker plugin
    $('#bs_datepicker_container input').datepicker({
        autoclose: true,
        container: '#bs_datepicker_container',
        format:'dd-mm-yyyy',
        language:'es',
        todayBtn:'linked',
        todayHighlight:true,
        orientation:'left'
    });
    $('#bs_datepicker_container_proxima input').datepicker({
        autoclose: true,
        container: '#bs_datepicker_container_proxima',
        format:'dd-mm-yyyy',
        language:'es',
        todayBtn:'linked',
        todayHighlight:true,
        daysOfWeekDisabled: [0,6]

    });
});