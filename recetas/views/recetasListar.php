<html>
    <head>
        <title>Recetas</title>
    </head>
    <body>
        <h1>Recetas</h1>
        <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Dificultad</th>
            <th>Tipo Cocina</th>
            <th>Duración</th>
            <th>Comensales</th>
            <th>Fecha Publicación</th>
            <th>Imagen</th>
        </tr>
        <?php foreach ($recetas as $receta) {?>
            <tr>
                <td><?php echo $receta['nombre'];?></td>
                <td><?php echo $receta['dificultad'];?></td>
                <td><?php echo $receta['tipoCocina'];?></td>
                <td><?php echo $receta['duracion'];?></td>
                <td><?php echo $receta['comensales'];?></td>
                <td><?php echo $receta['fechaPublicacion'];?></td>
                <td><?php echo $receta['imagen'];?></td>
            </tr>
        <?php } ?>
    </table>
    </body>
</html>
