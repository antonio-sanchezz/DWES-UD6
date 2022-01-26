<?php

    function listarTodos() {
        // Se incluye el modelo.
        require './models/recetasModel.php';

        // En $recetas tenemos un array con todos las recetas gracias al modelo.
        $recetas = getRecetas();
        
        // La vista recibe un array para mostrarlo por pantalla.
        include './views/recetasListar.php';
    }

    function mostrarUno() {
        // Se incluye el modelo.
        require './models/recetasModel.php';

        // En $receta tenemos los datos de una receta en concreto.
        $receta = getReceta($_GET['id']);

        // La vista recibe un array para mostrarlo por pantalla.
        include './views/recetasMostrar.php';
    }

    function eliminar() {
        // Se incluye el modelo.
        require './models/recetasModel.php';
        
        // Eliminamos la receta.
        eliminarReceta($_GET['id']);

        // Una vez eliminado nos redirigimos a la lista inicial.
        header("Location: index.php");
    }

    function crear() {
        // Se incluye el modelo.
        require './models/recetasModel.php';

        // En $creada tenemos si se ha realizado la creación o no.
        $creada = crearReceta($_POST['nombre'], $_POST['dificultad'], $_POST['tipoCocina'], $_POST['duracion'], $_POST['comensales'], $_POST['fechaPublicacion'], $_FILES['imagen']);

        // La vista recibe un boolean.
        include './views/recetasCrear.php';
    }

    function form() {
        // Se incluye el modelo.
        require './models/recetasModel.php';

        // En caso de que tengamos un id cargamos los datos de la receta.
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $receta = getReceta($id);
        }
        
        include './views/recetasForm.php';
    }

    function actualizar() {

        // Se incluye el modelo.
        require './models/recetasModel.php';
        $id = $_POST['id'];

        $receta = getReceta($id);

        // Si no se ha añadido ninguna imagen nos quedaremos con la que tengamos en la base de datos, en caso contrario subimos la imagen nueva.
        if ($receta['imagen'] != $_FILES['imagen']['name'] && $_FILES['imagen']['size'] != 0) {
            $file = $_FILES['imagen'];
        } else {
            $file = $receta['imagen'];
        }

        // En $creada tenemos si se ha realizado la creación o no.
        $actualizada = actualizarReceta($id, $_POST['nombre'], $_POST['dificultad'], $_POST['tipoCocina'], $_POST['duracion'], $_POST['comensales'], $_POST['fechaPublicacion'], $file);
        header("Location: ?controller=recetas&action=form&id=$id");
    }

?>