src="https://code.jquery.com/jquery-3.6.0.min.js";
$(document).ready(function() {
    $('.eliminar-usuario').on('click', function() {
        let usuarioId = $(this).data('id');

        if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            $.ajax({
                url: '../controlador/eliminar_usuario.php',
                type: 'POST',
                data: {
                    eliminar: true,
                    id_usuario: usuarioId
                },
                success: function(response) {
                    if (response === 'success') {
                        alert('Usuario eliminado con éxito');
                        location.reload();
                    } else {
                        alert('Error al eliminar el usuario');
                    }
                },
                error: function() {
                    alert('Error al procesar la solicitud');
                }
            });
        }
    });
});