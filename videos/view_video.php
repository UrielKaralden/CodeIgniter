<html>
	<header>
		<form method="POST" action="#">
			<input type="text" name="video" placeholder="buscar">
			<button type="submit">Buscar</button>
		</form>
	</header>
	<body>
	<?php
		$conexion=mysqli_connect('localhost','root','','streaming')or die("Error al conectar".mysqli_error($conexion));
		$video_query="SELECT * from videos where id=1";
		$video_info=mysqli_query($conexion, $video_query) or die (mysqli_error($conexion));
		if($row= mysqli_fetch_array($video_info)){
			$video=$row['url_video'];
			$titulo=$row['titulo'];
			$user=$row['usuario'];
			echo"<h2>$titulo</h2>";
			echo"<video width=\"854\" height=\"479\" controls>
				<source src=\"$video\" type=\"video/mp4\">
			</video>";
			echo"<br>$user";
		}
		echo"<br><br>";
		$miniaturas_query="SELECT * from miniaturas where id=1";
		$miniaturas_info=mysqli_query($conexion, $miniaturas_query) or die (mysqli_error($conexion));
		if($row=mysqli_fetch_array($miniaturas_info)){
			$miniatura=$row['url_img'];
			$titulo=$row['titulo_video'];
			$usersugerido=$row['usuario'];
			echo"<img class=\"logo\" src=\"$miniatura\" alt=\"miniatura\" width=\"150\" height=\"80\"/>";
			echo"$titulo <br>";
			echo"$usersugerido";
		}
		echo"<br><br>";
		echo"<form method=\"POST\" action=\"publicar_comentario.php\">
			<textarea name=\"comentario\" placeholder=\"Escriba aqui su comentario\" cols=\"100\" rows=\"15\"></textarea><br>
			<input type=\"hidden\" name=\"usuario\" value=\"hater\"><br>
			<input type=\"hidden\" name=\"id_vid\" value=\"1\"><br>
			<button type=\"submit\">Comentar</button>
			</form>";
		echo"<br>";
		$comentario_query="SELECT * from comentarios where id_videos=1";
		$comentario_info=mysqli_query($conexion, $comentario_query) or die (mysqli_error($conexion));
		while($row=mysqli_fetch_array($comentario_info)){
			$comentario=$row['comentario'];
			$fecha=$row['fecha_publicacion'];
			$usuario=$row['usuario'];
			echo"$comentario <br>";
			echo"$fecha <br>";
			echo"$usuario <br>";
			echo"<br><br>";
		}
		echo"<br><br>";
	?>
	<body>
</html>