<?php

class DosRuedas {

    private int $cilindrada;
    private int $ponerGasolina;

    function __construct($cilindrada, $ponerGasolina)
    {
        $this->cilindrada = $cilindrada;
        $this->ponerGasolina = $ponerGasolina;
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