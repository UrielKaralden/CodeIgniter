<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Subir vídeo</title>
		<div align ="center">
			<h3>Biblioteca Audiovisual Perséfone</h3>
		</div>
	</head>
	<body>
		<h1>Añadir video a Perséfone</h1>
		<?php 	echo form_open('videos/upload');
				echo form_label('Nombre del archivo'); echo '&emsp;';
				echo form_input(array('id'=>'url_video', 'name'=>'url_video')); echo '<br><br>';
				echo form_label('Título del archivo'); echo '&emsp;';
				echo form_input(array('id'=>'titulo', 'name'=>'titulo')); echo '<br><br>';
				echo form_label('Descripción del video'); echo '&emsp;';
				echo form_input(array('id'=>'desc', 'name'=>'desc')); echo '<br><br>';
				echo form_submit(array('id'=>'submit_video','value'=>'Subir video'));
				echo form_close();?>

	</body>
</html>
