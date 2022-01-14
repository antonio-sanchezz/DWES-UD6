<?php
function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}

$moto1 = new DosRuedas('Transparente', 1550, 400);

$moto1->addPersonas(70);

echo "Peso: " . $moto1->peso . "<br>";

//$moto1->verAtributo($moto1);

print_r($moto1->verAtributo($moto1));

$camion1 = new Camion('Blanco', 600, 5, 50);

$camion1->addPersonas(84);
$camion1->repintar('Azul');
$camion1->numeroPuertas = $camion1->numeroPuertas + 2;

print_r($camion1->verAtributo($camion1));

?>