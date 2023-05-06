<?php
session_start();
require '../controlador/conexion.php'; // Asegúrate de que este archivo contenga la conexión a la base de datos

if (isset($_POST['eliminar'])) {
    $id_usuario = $_POST['id_usuario'];
    $query = "DELETE FROM usuarios WHERE id = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id_usuario);

    if ($stmt->execute()) {
        // Redirige a la página donde se muestran los usuarios
        echo 'success';
    } else {
        echo "Error al eliminar el usuario";
    }

    $stmt->close();
}
?>