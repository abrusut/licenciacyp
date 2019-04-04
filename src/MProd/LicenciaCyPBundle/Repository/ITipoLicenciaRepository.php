<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\TipoLicencia;

interface ITipoLicenciaRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\TipoLicencia     
     * @return void
     */  
    public function save(TipoLicencia $tipoLicencia);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\TipoLicencia
     */    
    public function findById($id);
}

?>