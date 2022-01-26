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
        $stmt->bindParam(7, $imagen);

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
        $stmt->bindParam(7, $imagen);
        $stmt->bindParam(8, $id);

        $exito = $stmt->execute();

        return $exito;
    }

?>