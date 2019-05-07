<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Numerador;

interface INumeradorService{    

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Numerador     
     * @return void
     */  
    public function save(Numerador $numerador);

    public function findById($id);
}


?>