<html>
    <head>
        <meta charset="utf-8">
	    <title>Articulos</title>
    </head>
    <body>
        <h1>Bienvenido a la web sobre artículos</h1>

        <a href="<?= base_url().'formulario/'?>"
            title='Añadir artículo'>Añadir artículo</a>

        <p>Estos son los artículos publicados.</p>

        <?php  foreach($articulos as $fila):?>

        <a href= "<?= base_url().'un_articulo/arti/'.$fila->titulo.'/'.$fila->descripcion.'/'.$fila->cuerpo?>"
            title =>"Ver artículo"><h2><?= $fila->titulo;?></h2></a>

        <p><?= $fila->descripcion;?></p><br>

        <?php endforeach; ?>
    </body>
</html>
