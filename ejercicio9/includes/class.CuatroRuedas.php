<?php

class CuatroRuedas {

    private int $numeroPuertas;
    private string $repintar;
    
    function __construct($numeroPuertas, $repintar)
    {
        $this->numeroPuertas = $numeroPuertas;
        $this->repintar = $repintar;
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