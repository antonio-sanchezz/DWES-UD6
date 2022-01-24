<?php

    function getConnection() {
        $user = 'developer';
        $pwd = 'developer';
        return new PDO('mysql:host=localhost;dbname=biblioteca', $user, $pwd);
    }

    function getPeriodicos() {
        $db = getConnection();
        $result = $db->query('SELECT nombre, fecha FROM periodicos');
        $periodicos = [];
        while ($periodico = $result->fetch()) {
            $periodicos[] = $periodico;
        }
        return $periodicos;
    }

    function getPeriodico($id) {
        $db = getConnection();
        $sqlQuery = "SELECT nombre, fecha FROM periodicos WHERE id = ?";
        $stmt = $db->prepare($sqlQuery);
        $stmt->bindParam(1, $id);

        $stmt->execute();

        $periodico = $stmt->fetch();

        return $periodico;
    }

?>