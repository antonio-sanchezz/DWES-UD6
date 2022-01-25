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
            // En $eliminado tenemos si se ha realizado la eliminacion o no.
        $eliminado = eliminarReceta($_GET['id']);
        // La vista recibe un boolean.
        include './views/recetasEliminar.php';
    }

    function crear() {
        // Se incluye el modelo.
        require './models/recetasModel.php';
        // En $creada tenemos si se ha realizado la creación o no.
        $creada = crearReceta($_GET['nombre'], $_GET['dificultad'], $_GET['tipoCocina'], $_GET['duracion'], $_GET['comensales'], $_GET['fechaPublicacion'], $_GET['imagen']);
        // La vista recibe un boolean.
        include './views/recetasCrear.php';
    }

    function actualizar() {
        // Se incluye el modelo.
        require './models/recetasModel.php';
        // En $creada tenemos si se ha realizado la creación o no.
        $actualizada = actualizarReceta($_GET['id'], $_GET['nombre'], $_GET['dificultad'], $_GET['tipoCocina'], $_GET['duracion'], $_GET['comensales'], $_GET['fechaPublicacion'], $_GET['imagen']);
        // La vista recibe un boolean.
        include './views/recetasActualizar.php';
    }

?>