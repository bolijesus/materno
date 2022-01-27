<script>
    $(document).ready(function () {
        $('.eliminar').on('click', function () {
            Swal.fire({
                title: 'Seguro Deseas eliminar este control?',
                text: "Esto ELIMINARA por completo y no tiene marcha atras!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si quiero!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Se ha borrado Con exito!',
                    'El Cup ha sido borrado',
                    'success'
                    )
                    $(this).parent().parent().delay("slow").fadeOut();     
                    let idControl=$(this).data('control');
                    eliminar(idControl);
                }
            });                                                     
        
        });

        function eliminar(idControl){
            console.log(idControl);
            
            
            $.ajax({
                type: "DELETE",
                url: "/control/"+idControl,
                data: {"_token":"{{ csrf_token() }}"},
                success: function (response) {
                    if (response.respuesta) {
                        
                    }                    
                }
            });           
            
        }
    });
    

    
    
</script>