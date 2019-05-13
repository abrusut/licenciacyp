<?php
namespace MProd\LicenciaCyPBundle\Repository;

use MProd\LicenciaCyPBundle\Entity\FileRendicionLiquidacion;

interface IFileRendicionLiquidacionRepository{    

    /**
     * @param MProd\LicenciaCyPBundle\Entity\FileRendicionLiquidacion     
     * @return void
     */  
    public function save(FileRendicionLiquidacion $fileRendicionLiquidacion);

    public function findById($id);    
}


?>