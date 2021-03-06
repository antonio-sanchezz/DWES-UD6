<?php

class Persona {

    private $nombre;
    private $dni;
    private $sexo;
    private $peso;
    private $altura;

    function __construct($nombre, $dni, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function getDni() {
        return $this->dni;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function getPeso() {
        return $this->peso;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function getAltura() {
        return $this->altura;
    }

    function mostrar() {
        return $this->nombre . " " . $this->dni . " " . $this->sexo . " " . $this->peso . " " . $this->altura;
    }

}

$persona = new Persona("Antonio", "11223344A", "M", 80, 172);

echo $persona->mostrar() . "<br>";

$persona->setNombre("Maria");
$persona->setDni("55667788B");
$persona->setSexo("F");
$persona->setPeso(60);
$persona->setAltura(165);

echo $persona->mostrar();

?>