<?php
	date_default_timezone_set('America/Mexico_City');
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$file_name = $_FILES['video']['name'];
		$file_temp = $_FILES['video']['tmp_name'];
		$file_size = $_FILES['video']['size'];
		
		if($file_size < 150000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
			if(in_array($end, $allowed_ext)){
				$name = $file_name;
				$location = '../video/'.$name.".".$end;
				$sql=$conn->query("SELECT * FROM video WHERE video_name='$name'");
				if($datos=$sql->fetch_object()){
					    echo "<script>alert('Este Video ya Existe')</script>";
						echo "<script>window.location = 'videos.php'</script>";
				}else{
					if(move_uploaded_file($file_temp, $location)){
						mysqli_query($conn, "INSERT INTO `video` VALUES('', '$name', '$location')") or die(mysqli_error());
						echo "<script>alert('Video Subido')</script>";
						echo "<script>window.location = 'videos.php'</script>";
					}
				}
				
			}else{
				echo "<script>alert('Wrong video format')</script>";
				echo "<script>window.location = 'videos.php'</script>";
			}
		}else{
			echo "<script>alert('File too large to upload')</script>";
			echo "<script>window.location = 'videos.php'</script>";
		}
	}
?>