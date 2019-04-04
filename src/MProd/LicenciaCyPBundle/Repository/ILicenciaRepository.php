<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Licencia;

interface ILicenciaRepository{
    /**
     * @param MProd\LicenciaCyPBundle\Entity\Licencia     
     * @return void
     */  
    public function save(Licencia $licencia);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Licencia
     */    
    public function findById($id);
}

?>