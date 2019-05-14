<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\Rendicion;

interface IRendicionRepository{

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Rendicion     
     * @return void
     */  
    public function save(Rendicion $rendicion);   

    public function persist(Rendicion $rendicion);

    public function flush();

     /**
     * @param integer $id     
     * @return MProd\LicenciaCyPBundle\Entity\Rendicion
     */    
    public function findById($id);
}

?>