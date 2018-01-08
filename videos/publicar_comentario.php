<?php
	$texto=$_POST['comentario'];
	$user=$_POST['usuario'];
	$id=$_POST['id_vid'];
	$conexion=mysqli_connect('localhost','root','','streaming')or die("Error al conectar".mysqli_error($conexion));
	$comentario_query="INSERT INTO comentarios(comentario, fecha_publicacion, id_videos, usuario) VALUES ('$texto',CURRENT_TIMESTAMP,'$id','$user')";
	$comentario_info=mysqli_query($conexion, $comentario_query) or die (mysqli_error($conexion));
	echo"<form action = \"view_video.php\" method = \"post\" id=\"publicado\">
		<input type = \"hidden\" name = \"id_video\" value = \"$id\">
		</form>";
	echo "<script type=\"text/javascript\">document.getElementById(\"publicado\").submit()</script>";
?>