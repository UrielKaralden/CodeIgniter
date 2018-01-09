<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Añadir Comentario</title>
		<div align ="center">
			<h3>Biblioteca Audiovisual Perséfone</h3>
		</div>
	</head>
	<body>
		<h2><?=$actus?></h2>
		<?= form_open(base_url().'index.php/caja_comentarios/add/'.$url.'/'.$usuario.'/'.$titulo,
		array('name'=>'mi_form','id'=>'form'));?>
		<?= form_hidden('iden',"$id",'class="hidden"')?> <br />
		<?= form_hidden('user',"$actus",'class="hidden"')?> <br />
		<?= form_label('Escriba aqui su comentario','Escriba aqui su comentario',array('class'=>'lable')); ?><br/>
		<?= form_textarea('texto','','class="textarea" row="50px"'); ?><br/>
		<?= form_submit('submit','Enviar','class="submit"'); ?>
		<?= form_close(); ?>
		<hr />
		<br />
		<a href="<?= base_url().'index.php/comentarios/com/'.$id.'/'.$url.'/'.$usuario.'/'.$titulo?>"
		title="Comentarios">Comentarios</a>
	</body>
</html>
