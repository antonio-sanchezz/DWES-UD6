<?php

class DosRuedas extends Vehiculo {

    private int $cilindrada;

    function __construct($color, $peso)
    {
        parent::__construct($color, $peso);
    }

    public function ponerGasolina($litros) {
        $this->peso += $litros*1.5;
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