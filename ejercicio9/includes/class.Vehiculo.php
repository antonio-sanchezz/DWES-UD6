<?php

class Vehiculo {

    private string $color;
    private float $peso;

    function __construct($color, $peso)
    {
        $this->peso = $peso;
        $this->color = $color;   
    }

    public function circula() {
        echo "El vehículo está circulando";
    }

    public function addPersonas($pesoPersona) {
        $this->peso += $pesoPersona;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}


?>