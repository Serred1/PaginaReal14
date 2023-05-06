function deleteVideo(videoId) {
    if (confirm("¿Está seguro de que desea eliminar este video?")) {
        $.ajax({
            url: "delete_video.php",
            type: "POST",
            data: {
                video_id: videoId
            },
            success: function(response) {
                if (response === "success") {
                    alert("Video eliminado exitosamente");
                    location.reload();
                } else {
                    alert("Error al eliminar el video");
                }
            }
        });
    }
}