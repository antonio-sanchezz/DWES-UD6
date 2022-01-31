<html>
    <head>
        <title>Recetas</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="./assets/js/eliminar.js"></script>
        <script type="text/javascript" src="./assets/js/detalle.js"></script>
        <script type="text/javascript" src="./assets/js/buscador.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <h1>Recetas</h1>
        <a href="?controller=recetas&action=form">Crear nueva receta</a>
        <a href="?controller=usuarios&action=cerrarSesion">Cerrar sesión</a><br>
        <label>Buscador: </label>
        <input type="text" id="buscador" name="buscador" placeholder="Nombre de la receta">
        <div id="resultados"></div>
        <table id="table1" border="1">
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
    <div class="modal">
        <div class="modal-content"></div>
    </div>
    </body>
</html>
