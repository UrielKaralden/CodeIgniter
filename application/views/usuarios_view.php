<html>
    <head>
        <meta charset = "utf-8">
	    <title>Inicio de sesión</title>
    </head>
    <body>
        <h1>Iniciar sesión</h1>

        <?php
            if(isset($mensaje))
                echo "<h2>​$mensaje</h2>";
        ?>
        <form ​name="form_iniciar"
            action="​<?= base_url().'index.php/usuarios/verify_session'?>"
            method=​"POST"​>

            <label for="Usuario">Usuario</label>
            <input type = "text" name ="user"><br>

            <label for="Contraseña">Contraseña</label>
            <input type = "password" name ="pswd"><br>

            <input type = "submit" name ="submit" value = "Entrar"><br>

            <a href="<?=base_url().'usuarios/registro'?>"
                title = 'Deseo registrarme'>Registrarme</a>

        </form>
    </body>
</html>
