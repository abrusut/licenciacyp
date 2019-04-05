<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Licencia;


interface IBoletaService{    
    public function generarBoleta(Licencia $licencia);
}

?>