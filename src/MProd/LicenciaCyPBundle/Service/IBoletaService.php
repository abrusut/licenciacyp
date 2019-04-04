<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Licencia;


interface ILicenciaService{
    public function generarLicencia(Licencia $licencia);
    public function bindPersonaToLicencia(Licencia $licencia);
    public function createComprobante($idTipoLicencia);
}

?>