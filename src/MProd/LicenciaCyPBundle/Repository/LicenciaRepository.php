<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Licencia;

/**
 * LicenciaRepository
 *
 */
class LicenciaRepository extends EntityRepository implements ILicenciaRepository
{

    public function save(Licencia $licencia)
    {
        $this->_em->persist($licencia);
        $this->_em->flush();
    }    

    public function findById($id){
        return $this->find($id);
    }

}


?>