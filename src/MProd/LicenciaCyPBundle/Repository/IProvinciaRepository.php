<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Provincia;

interface IProvinciaRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Provincia     
     * @return void
     */  
    public function save(Provincia $provincia);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Provincia
     */    
    public function findById($id);

    /**
     * @param string $provinciaId     
     * @param string $provinciaNombre          
     * @return MProd\LicenciaCyPBundle\Entity\Provincia
     */   
    public function findByProvinciaIdAndProvinciaNombre($provinciaId,$provinciaNombre);
}



?>