<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\TipoLicencia;

/**
 * TipoLicenciaRepository
 *
 */
class TipoLicenciaRepository extends EntityRepository implements ITipoLicenciaRepository
{
    public function save(TipoLicencia $tipoLicencia)
    {
        $this->_em->persist($tipoLicencia);
        $this->_em->flush();
    }    

    public function findById($id){
        return $this->find($id);
    }
}


?>