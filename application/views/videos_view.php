<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $titulo;?></title>
	</head>
	<body>
		<h1><?= $titulo;?></h1>
		<video width="854" height="479" controls>
			<source src="<?= $url?>" type="video/mp4">
		</video>
		<br>
		<h3><?=$usuario?></h3>
		<br>
		<a href="<?= base_url().'index.php/comentarios/com/'.$id.'/'.$url_base.'/'.$usuario.'/'.$titulo?>" title="Ver comentarios">
		Comentarios</a>
	</body>
</html>