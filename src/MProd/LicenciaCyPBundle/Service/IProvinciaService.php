<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Provincia;


interface IProvinciaService{
    /**
     * @param MProd\LicenciaCyPBundle\Entity\Provincia     
     * @return void
     */  
    public function save(Provincia $provincia);

    public function findById($id);

    public function findByProvinciaIdAndProvinciaNombre($provinciaId,$provinciaNombre);
}

?>