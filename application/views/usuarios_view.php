<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Inicio de sesión</title>
	</head>
	<body>
		<h1>Iniciar sesión</h1>
		<?php if(isset($mensaje)):?>
		<h2><?= $mensaje?></h2>
		<?php endif;?>
		<form name="form_iniciar"
		action="<?= base_url().'index.php/usuarios/verify_sesion'?>"  method="POST">
			<label for="Usuario"> Usuario</label>
			<input type="text" name="user" /><br/>
			
			<label for="contraseña"> Contraseña</label>
			<input type="password" name="pass" /><br/>
			
			<input type="submit" value="Entrar" name="submit" /><br/>
			
			<a href="<?= base_url().'index.php/usuarios/registro'?>" title="Deseo registrarme">
			Registrarme</a>
		</form>
	</body>
</html>