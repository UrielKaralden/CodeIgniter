<html>
    <head>
	    <title>Articulos</title>
    </head>
    <body>
        <h1>Bienvenido a la web sobre artículos</h1>
        <a href="<?= base_url().'index.php/articulos/'?>"
            title='Ver todos los artículos'>Ver todos los artículos</a>
        <p>Este es el artículo:</p>

        <h1><?= $titulo_articulo;?></h1><!-- PHP no reconoce $titulo_articulo -->
        <h3><?= $descripcion;?></h3>
        <p><?= $cuerpo;?></p>
    </body>
</html>
