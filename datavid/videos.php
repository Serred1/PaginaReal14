<?php require_once "parte_superior.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" href="../css/bebe.css">
	<script src="../js/delete_video.js"></script>
	<title>Videos</title>

<body>
	<div class="contenidovideo">
		<nav class="navbar navbar-default">
			<h1 style="color: black;"> Aprendizaje</h1>
		</nav>
		<div class="col-md-3"></div>
		<div class="col-md-6 well">
			<h3 class="text-primary">Subir Videos</h3>
			<hr style="border-top:1px dotted #ccc;" />
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Agregar Video</button>
			<hr style="border-top:3px solid #ccc;" />
			<?php
			require 'conn.php';

			$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
			while ($fetch = mysqli_fetch_array($query)) {
			?>
				<div class="col-md-12">
					<div class="col-md-4" style="color: #000;" style="word-wrap:break-word;">
						<br />
						<h4>Nombre del Video</h4>
						<h5 class="text-primary" style="white-space: nowrap"><?php echo $fetch['video_name'] ?></h5>
					</div>
					<div class="col-md-8">
						<video width="200%" height="300%" controls>
							<source src="<?php echo $fetch['location'] ?>">
						</video>
					</div>
					<button type="button" class="btn btn-danger" onclick="deleteVideo(<?php echo $fetch['video_id']; ?>)">Eliminar</button>
					<br style="clear:both;" />
					<hr style="border-top:1px groovy #000;" />
				</div>
			<?php
			}
			?>
		</div>
		<div class="modal fade" id="form_modal" aria-hidden="true">
			<div class="modal-dialog">
				<form action="save_video.php" method="POST" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-body">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Archivo de Video</label>
									<input type="file" name="video" class="form-control-file" />
								</div>
							</div>
						</div>
						<div style="clear:both;"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
							<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>
<?php require_once "parte_inferior.php" ?>