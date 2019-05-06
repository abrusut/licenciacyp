<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Liquidacion;

interface ILiquidacionRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Liquidacion     
     * @return void
     */  
    public function save(Liquidacion $liquidacion);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Liquidacion
     */    
    public function findById($id);
}

?>