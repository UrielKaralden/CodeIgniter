<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Inicio de sesión</title>
	</head>
	<body>
		<div align = 'center'>
			<h1>Bienvenido a la Biblioteca Audiovisual Perséfone</h1>
			<h2>Iniciar sesión</h2>
			<?php if(isset($mensaje)):?>
				<h3><?= $mensaje?></h3>
			<?php endif;?>
			<?php 	echo form_open('usuarios/verify_user');
					echo form_label('Usuario'); echo "&emsp;";
					echo form_input(array('id'=>'user', 'name'=>'user')); echo "<br><br>";
					echo form_label('Contraseña'); echo "&emsp;";
					echo form_password(array('id'=>'pass', 'name'=>'pass')); echo "<br><br>";
					echo form_submit(array('id'=>'submit', 'value'=>'Entrar')); echo "<br><br>";
					echo form_close();
			?>

			<a href="<?= base_url().'index.php/usuarios/registro'?>" title="Deseo registrarme">
			Registrarme</a>
		</div>
	</body>
</html>
