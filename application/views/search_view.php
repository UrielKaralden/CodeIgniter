<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados de la búsqueda</title>
        <h1>Resultados de la búsqueda:</h1>
    </head>
    <body>
        <table>
            <tr><th>Título</th><th>Usuario</th><th>Publicación</th></tr>
            <?php foreach($query as $item):?>
                <tr>
                    <td><?= $item->titulo ?></td>
                    <td><?= $item->usuario ?></td>
                    <td><?= $item->Fecha ?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>
