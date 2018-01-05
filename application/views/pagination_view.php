<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoCaster Search Results</title>
    <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>">

    <style type="text/css">
    .bg-border {
        border: 1px solid #ddd;
        border-radius: 4px 4px;
        padding: 15px 15px;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 well">
        <?php
        $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
        echo form_open("pagination/search", $attr);?>
            <div class="form-group">
                <div class="col-md-6">
                    <input class="form-control" id="video_name" name="video_name" placeholder="Busca un vídeo..." type="text" value="<?php echo set_value('video_name'); ?>" />
                </div>
                <div class="col-md-6">
                    <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
                    <a href="<?php echo base_url(). "/pagination/index"; ?>" class="btn btn-primary">Show All</a>
                </div>
            </div>
        <?php echo form_close(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2 bg-border">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($videos_list); ++$i) { ?>
                <tr>
                    <td><?php echo ($num = $page+$i+1); ?></td>
                    <td><a href= "<?= base_url().'videos/video/'.$videos_list[$i]->titulo?>"
                        title =><?php echo $videos_list[$i]->titulo;?> </a></td>
                    <td><?php echo $videos_list[$i]->descripcion; ?></td>
                    <td><?php echo $videos_list[$i]->usuario; ?></td>
                    <td><?php echo $videos_list[$i]->Fecha; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo $pagination; ?>
        </div>
    </div>
</div>
</body>
</html>
