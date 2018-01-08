<!DOCTYPE HTML>
<html>
<<<<<<< HEAD
	<header>
		<title><?php $titulo?></title>
		<div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 well">
                <?php
                $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
                echo form_open("pagination/search_prueba", $attr);?>
                    <div class="form-group">
                        <div class="col-md-6">
                            <!--<input class="form-control" id="video_name" name="video_name" placeholder="Busca un vídeo..." type="text" value="<?php //echo set_value('video_name'); ?>" />-->
							<?php echo form_input('...','Buscar');
								  echo form_submit('','Buscar');
							?>
						</div>
                        <div class="col-md-6">
                            <!--<input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Buscar" />-->
                            <a href="<?php echo base_url(). "pagination/index"; ?>" class="btn btn-primary">Mostrar todos</a>
                        </div>
                    </div>
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
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
				<source src=\".pruebas video\".$video type=\"video/mp4\">
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
			echo" <br>$titulo <br>";
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
=======
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
>>>>>>> e1625c0d637fe92ea8362ea8631227adb8502fef
