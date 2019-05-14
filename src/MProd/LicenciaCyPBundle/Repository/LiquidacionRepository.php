<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Liquidacion;

/**
 * LiquidacionRepository
 *
 */
class LiquidacionRepository extends EntityRepository implements ILiquidacionRepository
{
    public function save(Liquidacion $liquidacion)
    {
        $this->_em->persist($liquidacion);        
        $this->_em->flush();
    } 
    
    public function persist(Liquidacion $liquidacion)
    {
        $this->_em->persist($liquidacion);                
    }

    public function flush()
    {
        $this->_em->flush();
    }

    public function findById($id){
        return $this->find($id);
    }
}


?>