<script>
    $(document).ready(function () {
        $('.eliminar').on('click', function () {
            Swal.fire({
                title: 'Seguro Deseas eliminar este paquete?',
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
                    'El Paquete ha sido borrado',
                    'success'
                    )
                    $(this).parent().parent().delay("slow").fadeOut();     
                    let idPaquete=$(this).data('paquete');
                    eliminar(idPaquete);
                }
            });                                                     
        
        });

        function eliminar(idPaquete){
            console.log(idPaquete);
            
            
            $.ajax({
                type: "DELETE",
                url: "/paquete/"+idPaquete,
                data: {"_token":"{{ csrf_token() }}"},
                success: function (response) {
                    if (response.respuesta) {
                        
                    }                    
                }
            });           
            
        }
    });
    

    
    
</script>