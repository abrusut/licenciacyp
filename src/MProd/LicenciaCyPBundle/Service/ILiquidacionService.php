<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Liquidacion;

interface ILiquidacionService{    

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Liquidacion     
     * @return void
     */  
    public function save(Liquidacion $liquidacion);

    public function findById($id);
}


?>