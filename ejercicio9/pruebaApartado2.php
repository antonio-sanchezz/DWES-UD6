<?php

function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$vehiculo1 = new Vehiculo('Rojo', 450);

$vehiculo1->circula();

$vehiculo1->addPersonas(50);
$vehiculo1->addPersonas(60);
echo "<br>Peso: ";

echo $vehiculo1->peso . " kg";








?>