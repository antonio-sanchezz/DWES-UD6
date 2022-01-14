<?php

class Coche extends CuatroRuedas {

    private int $numeroCadenasNieve;

    function __construct($color, $peso, $numeroCadenasNieve, $numeroPuertas)
    {
        $this->numeroCadenasNieve = $numeroCadenasNieve;
        parent::__construct($color, $peso, $numeroPuertas);
    }

    public function addPersonas($pesoPersona)
    {
        parent::addPersonas($pesoPersona);
        if ($this->peso >= 1500 && $this->numeroCadenasNieve <= 2) {
            return "Atención, ponga 4 cadenas para la nieve.";
        }
    }

    public function addCadenasNieve($num) {
        $this->numeroCadenasNieve += $num;
    }

    public function quitarCadenasNieve($num) {
        $this->numeroCadenasNieve -= $num;
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