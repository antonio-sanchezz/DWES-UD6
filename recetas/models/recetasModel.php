<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return new PDO('mysql:host=localhost;dbname=cocina', $user, $pwd);
    }

    function getRecetas() {
        $db = getConnection();
        $result = $db->query('SELECT * FROM recetas');
        $recetas = [];
        while ($receta = $result->fetch()) {
            $recetas[] = $receta;
        }
        return $recetas;
    }

    function getReceta($id) {
        $db = getConnection();
        $sqlQuery = "SELECT * FROM recetas WHERE id = ?";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $id);

        $stmt->execute();

        $receta = $stmt->fetch();

        return $receta;
    }

    function eliminarReceta($id) {

        $exito = false;

        $db = getConnection();
        $sqlQuery = "DELETE FROM recetas WHERE id = ?";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $id);

        $exito = $stmt->execute();

        return $exito;
    }

    function crearReceta($nombre, $dificultad, $tipoCocina, $duracion, $comensales, $fechaPublicacion, $imagen) {

        $exito = false;

        $db = getConnection();
        $sqlQuery = "INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUE (?,?,?,?,?,?,?)";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $dificultad);
        $stmt->bindParam(3, $tipoCocina);
        $stmt->bindParam(4, $duracion);
        $stmt->bindParam(5, $comensales);
        $stmt->bindParam(6, $fechaPublicacion);
        if (is_string($imagen)) {
            $stmt->bindParam(7, $imagen);
        } else {
            $stmt->bindParam(7, $imagen['name']);
        }

        $exito = $stmt->execute();

        return $exito;
    }

    function actualizarReceta($id, $nombre, $dificultad, $tipoCocina, $duracion, $comensales, $fechaPublicacion, $imagen) {

        $exito = false;

        $db = getConnection();
        $sqlQuery = "UPDATE recetas SET nombre = ?, dificultad = ?, tipoCocina = ?, duracion = ?, comensales = ?, fechaPublicacion = ?, imagen = ? WHERE id = ?";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $nombre);
        $stmt->bindParam(2, $dificultad);
        $stmt->bindParam(3, $tipoCocina);
        $stmt->bindParam(4, $duracion);
        $stmt->bindParam(5, $comensales);
        $stmt->bindParam(6, $fechaPublicacion);
        if (is_string($imagen)) {
            $stmt->bindParam(7, $imagen);
        } else {
            $stmt->bindParam(7, $imagen['name']);
        }
        $stmt->bindParam(8, $id);

        $exito = $stmt->execute();

        if(!is_string($imagen)) {

            // Obtenemos la ruta del archivo.
            $target_file = "images/" . basename($imagen["name"]);
        
            // Introducimos el archivo en la ruta indicada.
            move_uploaded_file($imagen["tmp_name"], $target_file);
        }

        return $exito;
    }

?>