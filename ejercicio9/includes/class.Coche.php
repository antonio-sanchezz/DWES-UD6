<?php

class Coche extends CuatroRuedas {

    private int $numeroCadenasNieve = 0;

    function __construct($color, $peso)
    {
        Vehiculo::__construct($color, $peso);
        $this->color = $color;
        $this->peso = $peso;
    }

    public function addCadenasNieve($num) {
        $this->numeroCadenasNieve += $num;
    }

    public function quitarCadenasNieve($num) {
        $this->numeroCadenasNieve -= $num;
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