<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Licencia;


interface ILicenciaService{
    /**
     * @param MProd\LicenciaCyPBundle\Entity\Licencia     
     * @return void
     */  
    public function save(Licencia $licencia);

    public function findById($id);

    public function findByComprobanteId($idComprobante);

    public function generarLicencia(Licencia $licencia);

    public function bindPersonaToLicencia(Licencia $licencia);
        
}

?>