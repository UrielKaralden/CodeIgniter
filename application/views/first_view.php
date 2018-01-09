<html>
    <head>
        <meta charset = "utf-8">
	    <title>Video Caster </title>
        <div align ="center">
			<h3>Biblioteca Audiovisual Perséfone</h3>
		</div>
    </head>
    <body>
        <?php ;?>
        <h1>Sea bienvenido</h1><br>
        <h3>Por favor, realice una búsqueda</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 well">
                <?php
                $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
                echo form_open("pagination/search");?>
                    <div class="form-group">
                        <div class="col-md-6">
                            <!--<input class="form-control" id="video_name" name="video_name" placeholder="Busca un vídeo..." type="text" value="<?php //echo set_value('video_name'); ?>" />-->
                            <?php   echo form_label('Buscador');?><br>
                            <?php   echo form_input(array('id'=>'info', 'name'=>'info'));
                                    echo form_submit(array('id'=>'Buscar','value'=>'Buscar'));
                                    echo form_close(); ?>
                            <?php   echo form_open('videos/go_higher');
                                    echo form_submit(array('id'=>'go_higher','value'=>'Subir vídeo'));?>
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

        <footer>
        &copy; Web Page developed by: Alejandro Muñoz del Alamo, Santiago Zaldívar Lavalle y Luis Manuel Igartuburu Muñoz
    </footer>
    </body>
</html>
