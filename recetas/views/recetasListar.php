<html>
    <head>
        <title>Recetas</title>
    </head>
    <body>
        <h1>Recetas</h1>
        <a href="?controller=recetas&action=form">Crear nueva receta</a>
        <a href="?controller=usuarios&action=cerrarSesion">Cerrar sesión</a>
        <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Dificultad</th>
            <th>Tipo Cocina</th>
            <th>Duración</th>
            <th>Comensales</th>
            <th>Fecha Publicación</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($recetas as $receta) {?>
            <tr>
                <td><?php echo $receta['nombre'];?></td>
                <td><?php echo $receta['dificultad'];?></td>
                <td><?php echo $receta['tipoCocina'];?></td>
                <td><?php echo $receta['duracion'];?></td>
                <td><?php echo $receta['comensales'];?></td>
                <td><?php echo $receta['fechaPublicacion'];?></td>
                <td><a href="?controller=recetas&action=mostrarUno&id=<?php echo $receta['id'];?>">Ver</a> <a href="?controller=recetas&action=form&id=<?php echo $receta['id'];?>">Editar</a> <a href="?controller=recetas&action=eliminar&id=<?php echo $receta['id'];?>">Eliminar</a></td>
            </tr>
        <?php } ?>
    </table>
    </body>
</html>
