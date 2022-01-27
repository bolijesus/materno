<script>
    $(document).ready(function () {
        $('.eliminar').on('click', function () {
            Swal.fire({
                title: 'Seguro Deseas eliminar este cup?',
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
                    let idCup=$(this).data('cup');
                    eliminar(idCup);
                }
            });                                                     
        
        });

        function eliminar(idCup){
            console.log(idCup);
            
            
            $.ajax({
                type: "DELETE",
                url: "/cup/"+idCup,
                data: {"_token":"{{ csrf_token() }}"},
                success: function (response) {
                    if (response.respuesta) {
                        
                    }                    
                }
            });           
            
        }
    });
    

    
    
</script>