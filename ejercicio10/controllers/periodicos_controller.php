<?php


function listar() {
    // Se incluye el modelo.
    require './models/periodicos_model.php';
    // En $periodicos tenemos un array con todos los periodicos gracias al modelo.
    $periodicos = getPeriodicos();
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/listarPeriodicos.php';
}

function mostrar() {
    // Se incluye el modelo.
    require './models/periodicos_model.php';
    // En $periodico tenemos los datos de un periodico en concreto.
    $periodico = getPeriodico($_GET['id']);
    // La vista recibe un array para mostrarlo por pantalla.
    include './views/mostrarPeriodico.php';
}


?>