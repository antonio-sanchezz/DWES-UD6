<?php

    function listar() {
        // Se incluye el modelo.
        require './models/libros_model.php';
        // En $libros tenemos un array con todos los libros gracias al modelo.
        $libros = getLibros();
        // La vista recibe un array para mostrarlo por pantalla.
        include './views/libros_listar.php';
    }

    function listarLibro($titulo) {
        // Se incluye el modelo.
        require './models/libros_model.php';
        // En $libros tenemos un array con todos los libros gracias al modelo.
        $libro = getLibro($titulo);
        // La vista recibe un array para mostrarlo por pantalla.
        include './views/mostrar_libro.php';
    }

?>