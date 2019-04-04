<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\TipoLicencia;

interface ITipoLicenciaService{
    /**
     * @param MProd\LicenciaCyPBundle\Entity\TipoLicencia     
     * @return void
     */  
    public function save(TipoLicencia $tipoLicencia);

    public function findById($id);
}

?>