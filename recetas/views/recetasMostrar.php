<script type="text/javascript" src="./assets/js/detalle.js"></script>
<div>
    <span class="close">&times;</span>
    <p>Nombre: <?php echo $receta['nombre'];?></p>
    <p>Dificultad: <?php echo $receta['dificultad'];?></p>
    <p>Tipo de Cocina: <?php echo $receta['tipoCocina'];?></p>
    <p>Duración: <?php echo $receta['duracion'];?></p>
    <p>Comensales: <?php echo $receta['comensales'];?></p>
    <p>Fecha de Publicación: <?php echo $receta['fechaPublicacion'];?></p>
    <img src="images/<?php echo $receta['imagen'];?>"/>
</div>