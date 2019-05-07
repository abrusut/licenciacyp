<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Rendicion;

interface IRendicionService{    

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Rendicion     
     * @return void
     */  
    public function save(Rendicion $rendicion);

    public function findById($id);
}


?>