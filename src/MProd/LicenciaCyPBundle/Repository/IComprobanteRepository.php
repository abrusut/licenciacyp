<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Comprobante;

interface IComprobanteRepository{
    /**
     * @param MProd\LicenciaCyPBundle\Entity\Comprobante     
     * @return void
     */  
    public function save(Comprobante $comprobante);

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Comprobante
     */    
    public function findById($id);
}


?>