<html>
    <head>
        <meta charset = "utf-8">
	    <title>Video Caster </title>
    </head>
    <body>
        <h1>Bienvenido a Video Caster.tv</h1><br><br>
        <h2>Soso pero práctico</h2><br><br>
        <?=form_open('videos/search');?>
        <?php $search = array('name'=>'search','id'=>'search',"value"=>"");?>
        <?=form_input($search);?><input type=submit value='Search' /></p>
        <?=form_close();?>
        <footer>
        &copy; Web Page developed by: Alejandro Muñoz del Alamo, Santiago Zaldívar Lavalle y Luis Manuel Igartuburu Muñoz
    	</footer>
    </body>
</html>
