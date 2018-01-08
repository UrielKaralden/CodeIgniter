<html>
	<head>
		<title><?= $titulo_web ?></title>
	</head>
	<body>
		<a href="<?= base_url().'index.php/caja_comentarios/comment/'.$id.'/'.$url.'/'.$usuario.'/'.$titulo?>" title="Añadir
		comentario">Añadir comentario</a>
		<?php foreach($comentarios as $fila):?>
			<h2><?=$fila->comentario?></h2>
			<p><?=$fila->usuario?></p>
		<br/>
		<?php endforeach; ?>
		<a href="<?= base_url().'index.php/videos/vid/'.$id.'/'.$url.'/'.$usuario.'/'.$titulo?>" title="Añadir
		comentario">Volver al video</a>
	</body>
</html>