<?php

class Local {

    private string $ciudad;
    private string $calle;
    private int $numeroPlantas;
    private Dimensiones $dimensiones;

    public function __construct($ciudad, $calle, $numeroPlantas, $dimensiones)
    {
        $this->ciudad = $this->checkString($ciudad);
        $this->calle =  $this->checkString($calle);
        $this->numeroPlantas = $this->checkInteger($numeroPlantas);
        $this->dimensiones = $this->checkDimensiones($dimensiones);
    }

    private function checkString($string) 
    {

        if (is_string($string)) 
        {
            return $string;
        } else 
        {
            exit("Error, no es una cadena.");
        }

    }

    private function checkInteger($int) {

        if (is_int($int) && $int >= 1 && $int <= 10) 
        {
            return $int;
        } else 
        {
            exit("Error, el numero debe estar entre 1 y 10.");
        }

    }

    private function checkDimensiones($dimensiones) 
    {

        if ($dimensiones instanceof Dimensiones) 
        {
            return $dimensiones;
        } else 
        {
            exit("Error, las dimensiones no se han establecido correctamente.");
        }

    }

    public function __get($name) 
    {
        return $this->$name;
    }
    
    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    public function __toString()
    {
        return "<p>Ciudad: $this->ciudad<br></p><p>Calle: $this->calle<br></p><p>Plantas: $this->numeroPlantas<br></p><p>Dimensiones: ($this->dimensiones)<br></p>";
    }

    public function __clone()
    {
        $this->dimensiones = clone $this->dimensiones;
    }

}

?>