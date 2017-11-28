<html>
    <head>
        <meta charset = "utf-8">
	    <title>Buscador de vídeos </title>
    </head>
    <body>
        <h1>Bienvenido al buscador de vídeos</h1><br><br>
        <!-- RECORDAR CAMBIAR METODO GET POR -->
        <?= form_open("GET","action=http://www.google.es/search", array("ie"=>"UTF-8", "oe"=>"UTF-8",))?>
        	<fieldset>
        <?= form_label('Buscador', 'browser');?>

                <?= form_input('search_text','','class="input" placeholder="Buscar video"');?>
                <?= form_submit('submit_search','Buscar');?><br><br>
        		</font>
        	</fieldset>
        </form>

        <hr>
        <footer>
    	&copy; Web Page developed by: Alejandro Muñoz del Alamo, Santiago Zaldívar Lavalle y Luis Manuel Igartuburu Muñoz
    	</footer>
    </body>
</html>
