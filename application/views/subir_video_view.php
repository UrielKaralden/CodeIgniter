<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Subir vídeo</title>
	</head>
	<body>
		<h1>Subir video</h1>
		
		<form name="form_subir_video"
		action="<?= base_url().'index.php/videos/upload'?>"  method="POST">

			Nombre del archivo: <input type="text" name="url_video" ><br>
			Título del vídeo: <input type="text" name="titulo" ><br>
			<input type="submit" value="Subir video">
		</form>
	</body>
</html>