<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Rendicion;

/**
 * RendicionRepository
 *
 */
class RendicionRepository extends EntityRepository implements IRendicionRepository
{
    public function save(Rendicion $rendicion)
    {
        $this->_em->persist($rendicion);        
        $this->_em->flush();            
    }    

    public function persist(Rendicion $rendicion)
    {
        $this->_em->persist($rendicion);                         
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