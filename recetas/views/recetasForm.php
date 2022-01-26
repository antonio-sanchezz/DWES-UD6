<html>
    <head>
        <title>Recetas</title>
    </head>
    <body>
        <h1>Recetas</h1>
        <a href="index.php">Volver</a>
        <?php

        if (isset($receta)) {
            $nombre = $receta['nombre'];
            $dificultad = $receta['dificultad'];
            $tipoCocina = $receta['tipoCocina'];
            $duracion = $receta['duracion'];
            $comensales = $receta['comensales'];
            $fechaPublicacion = $receta['fechaPublicacion'];
            $imagen = $receta['imagen'];
        } else {
            $nombre = "";
            $dificultad = "";
            $tipoCocina = "";
            $duracion = "";
            $comensales = "";
            $fechaPublicacion = "";
            $imagen = "";
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo '<form class="form-register" action="?controller=recetas&action=actualizar&id= ' . $id . '" method="POST" enctype="multipart/form-data">';
        } else {
            $id = "";
            echo '<form class="form-register" action="?controller=recetas&action=crear" method="POST" enctype="multipart/form-data">';
        }

        ?>
        
        <h2 class="form-titulo">Características:</h2>
        <div class="contenedor-inputs">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="text" name="nombre" placeholder="Nombre" class="input-100" value="<?php echo $nombre;?>" required>
            <input type="text" name="dificultad" placeholder="Dificultad" class="input-100" value="<?php echo $dificultad;?>" required>
            <input type="text" name="tipoCocina" placeholder="Tipo de cocina" class="input-100" value="<?php echo $tipoCocina;?>" required>
            <input type="number" name="duracion" placeholder="Duración" class="input-48" value="<?php echo $duracion;?>" required>
            <input type="number" name="comensales" placeholder="Comensales" class="input-48" value="<?php echo $comensales;?>" required >
            <input type="date" name="fechaPublicacion" placeholder="Fecha" class="input-100" value="<?php echo $fechaPublicacion;?>" required>
            <?php
            if (isset($_GET['id'])) {
                if (file_exists("images/" . $imagen)) {
                    if(empty($imagen)) {
                        echo "<img src='images/no-image.png'  name='avatarActual' width=500px>";
                    } else {
                        echo "<img src='images/$imagen'  name='avatarActual' width=400px>";
                    }
                } else {
                    echo "<img src='images/no-image.png'  name='avatarActual' width=500px>";
                }
            }
            ?>
            <input type="file" name="imagen" accept="image/png, image/jpeg" class="input-100">
            
            <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    echo '<input type="submit" value="Editar" class="btn-enviar">';
                } else {
                    echo '<input type="submit" value="Crear" class="btn-enviar">';
                }
            ?>
        </div>
    </form>
    </body>
</html>
