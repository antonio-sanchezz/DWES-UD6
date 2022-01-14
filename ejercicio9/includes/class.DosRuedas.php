<?php

class DosRuedas extends Vehiculo {

    private int $cilindrada;

    function __construct($color, $peso, $cilindrada)
    {
        $this->cilindrada = $cilindrada;
        parent::__construct($color, $peso);
    }

    public function addPersonas($pesoPersona) {
        $this->peso += $pesoPersona + 1.5;
    }

    public function ponerGasolina($litros) {
        $this->peso += $litros*1.5;
    }

    public function __get($name) {
        if (property_exists(get_Class(),$name)) {
            return $this->$name;
        } else {
            return parent::__get($name);
        }
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}


?>