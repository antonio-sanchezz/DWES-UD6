<?php
class Cine extends LocalComercial {

    private int $aforoSala;

    public function __construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia, $aforoSala)
    {
        parent::__construct($ciudad, $calle, $numeroPlantas, $dimensiones, $razonSocial, $numLicencia);
        $this->aforoSala = $this->checkAforo($aforoSala);
        $this->dimensiones = $dimensiones;
    }

    private function checkAforo($aforoSala) {

        if (is_int($aforoSala) && $aforoSala > 0)
        {
            return $aforoSala;
        } else
        {
            exit("Error, el aforo debe ser mayor a 0.");
        }

    }

    public function __toString()
    {
        return parent::__toString() . "<p><datos del local comercial></p><p>Aforo: $this->aforoSala<br></p>";
    }

    public function getAforoSala() {
        return $this->aforoSala;
    }

}

?>