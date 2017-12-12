<html>
    <head>
        <meta charset = "utf-8">
	    <title>Nuevo artículo</title>
    </head>
    <body>
        <h1>Bienvenido a la web sobre artículos</h1>
        <a href="<?= base_url().'index.php/articulos/'?>"
            title='Artículos'>Artículos</a>
        <h1>Insertar artículo</h1>

        <?= form_open(base_url().'index.php/formulario/validar',
            array('name'=>'mi_form', 'id'=>'form'));?>

        <?= form_label('Título','Título', array('class'=>'label'));?>
        <?= form_input('titulo','','class="input" placeholder="Buscar"');?> <br><br>
        <!-- La web no detecta la entrada de valores en el campo Título -->

        <?= form_label('Descripción','Descripción',
            array('class'=>'label'));?><br>
        <?= form_textarea('descripcion','', 'class="textarea" row="25px"');?>
        <br><br>

        <?= form_label('Cuerpo','Cuerpo', array('class'=>'label'));?>
        <?= form_textarea('cuerpo','', 'class="textarea" row="50px"');?>
        <br><br>

        <?= form_submit('submit','Enviar datos','class="submit"');?>
        <?= form_close();?>

        <hr>
        <h3>Posibles errores</h3>
        <?= validation_errors(); ?>
    </body>
</html>
