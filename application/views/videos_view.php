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
	</body>
</html>