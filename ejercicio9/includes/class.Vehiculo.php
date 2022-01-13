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

    }

    public function add_personas($peso_persona) {

    }

}


?>