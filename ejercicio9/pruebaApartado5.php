<?php
/*
function __autoload($name)
{
   include_once 'includes/class.' . $name . '.php';
}*/

spl_autoload_register(function($name) {
   include_once('includes/class.' . $name . '.php');
});

$coche1 = new Coche('Verde', 2100, 2, 4);

$coche1->addCadenasNieve(2);
$coche1->addPersonas(80);
$coche1->setColor('Azul');
$coche1->quitarCadenasNieve(4);
$coche1->setColor('Negro');

print_r(Vehiculo::verAtributo($coche1));

?>