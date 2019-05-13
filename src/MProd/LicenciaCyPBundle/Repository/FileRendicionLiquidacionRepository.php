<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\FileRendicionLiquidacion;

/**
 * FileRendicionLiquidacionRepository
 *
 */
class FileRendicionLiquidacionRepository extends EntityRepository implements IFileRendicionLiquidacionRepository
{
    public function save(FileRendicionLiquidacion $fileRendicionLiquidacion)
    {
        $this->_em->persist($fileRendicionLiquidacion);
        $this->_em->flush();
    }    

    public function findById($id){
        return $this->find($id);
    }

    public function findFileRendicionLiquidacionByNombreOriginalArchivo($nombreOriginalArchivo){
        return $this->findBy(array(
            'nombreOriginalArchivo' => $nombreOriginalArchivo            
            )
        );
    }
}


?>