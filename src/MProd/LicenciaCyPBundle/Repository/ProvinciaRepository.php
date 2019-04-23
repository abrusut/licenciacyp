<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Provincia;

/**
 * ProvinciaRepository
 *
 */
class ProvinciaRepository extends EntityRepository implements IProvinciaRepository
{

    public function save(Provincia $provincia)
    {
        $this->_em->persist($provincia);
        $this->_em->flush();
    }

    public function findById($id){
        return $this->find($id);
    }
    public function findByProvinciaIdAndProvinciaNombre($provinciaId,$provinciaNombre)
    {
        return $this
            ->findOneBy(array(
                'id' => $provinciaId,
                'nombre' => $provinciaNombre                
            ));
    }
}


?>