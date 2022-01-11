<?php

class LocalComercial extends Local {

    private string $razonSocial;
    private string $numLicencia;

    public function __construct($razonSocial, $numLicencia)
    {
        $this->razonSocial = $razonSocial;
        $this->numLicencia = $numLicencia;
    }
    
    function __toString()
    {
        return "<p><datos del local></p><p>Razón Social: $this->razonSocial<br></p><p>Número de Licencia: $this->numLicencia<br></p>";
    }

}

?>