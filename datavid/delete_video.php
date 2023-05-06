<?php
require_once 'conn.php';

if (isset($_POST['video_id'])) {
    $video_id = $_POST['video_id'];

    // Obtén la ubicación del video
    $query = mysqli_query($conn, "SELECT location FROM video WHERE video_id = '$video_id'") or die(mysqli_error());
    $fetch = mysqli_fetch_array($query);
    $location = $fetch['location'];

    // Elimina el video del servidor
    if (unlink($location)) {
        // Elimina el video de la base de datos
        $delete_query = mysqli_query($conn, "DELETE FROM video WHERE video_id = '$video_id'") or die(mysqli_error());
        if ($delete_query) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>