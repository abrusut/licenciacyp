<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Numerador;

/**
 * NumeradorRepository
 *
 */
class NumeradorRepository extends EntityRepository implements INumeradorRepository
{
    public function save(Numerador $numerador)
    {
        $this->_em->persist($numerador);
        $this->_em->flush();
    }    

    public function findById($id){
        return $this->find($id);
    }
}


?>