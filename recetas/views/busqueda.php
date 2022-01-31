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
            <td><button class="detalle" id="<?php echo $receta['id'];?>">Ver</button> <a href="?controller=recetas&action=form&id=<?php echo $receta['id'];?>">Editar</a> <button id="<?php echo $receta['id'];?>" class="eliminar">Eliminar</button></td>
        </tr>
    <?php } ?>
</table>
