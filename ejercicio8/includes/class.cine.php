<?php

include_once("class.localcomercial.php");

class Cine extends LocalComercial {

    private int $aforoSala;

    function __construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia, $aforoSala)
    {
        parent::__construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia);
        $this->aforoSala = $aforoSala;
    }

    function __toString()
    {
        return "<p><datos del local comercial></p><p>Aforo: $this->aforoSala<br></p>";
    }

    function getAforoSala() {
        return $this->aforoSala;
    }

}

?>