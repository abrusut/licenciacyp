<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Numerador;

interface INumeradorRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Numerador     
     * @return void
     */  
    public function save(Numerador $liquidacion);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Numerador
     */    
    public function findById($id);
}

?>