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
        // En $creada tenemos si se ha realizado la creación o no.
        $actualizada = actualizarReceta($id, $_POST['nombre'], $_POST['dificultad'], $_POST['tipoCocina'], $_POST['duracion'], $_POST['comensales'], $_POST['fechaPublicacion'], $_FILES['imagen']);
        header("Location: ?controller=recetas&action=form&id=$id");
    }

?>