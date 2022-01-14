<?php

function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$coche1 = new Coche('Azul', 650, 0, 5);

$coche1->addPersonas(700);

echo "Color: " . $coche1->color . "<br>";
echo "Peso: " . $coche1->peso . "<br><br>";

$coche1->repintar("Amarillo");
$coche1->addCadenasNieve(3);

echo "Color: " . $coche1->color . "<br>";
echo "Cadenas de nieve: " . $coche1->numeroCadenasNieve . "<br><br>";

$moto1 = new DosRuedas("Marrón", 30, 500);

$moto1->addPersonas(2);
$moto1->ponerGasolina(2000);

echo "Color: " . $moto1->color . "<br>";
echo "Peso: " . $moto1->peso . "<br><br>";


?>