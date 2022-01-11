<?php

class Cine extends LocalComercial {

    private $aforoSala;

    function __construct($aforoSala)
    {
        $this->aforoSala = $aforoSala;
    }

    function __toString()
    {
        return "<p><datos del local comercial></p><p>Aforo: <valor><br></p>";
    }

}

?>