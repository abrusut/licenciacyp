<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Persona;

/**
 * PersonaRepository
 *
 */
class PersonaRepository extends EntityRepository implements IPersonaRepository
{

    public function save(Persona $persona)
    {
        $this->_em->persist($persona);
        $this->_em->flush();
    }

    public function findById($id){
        return $this->find($id);
    }
    public function findBySexoAndTipoDocumentoAndNumeroDocumento($sexo,$tipoDocumento,
            $numeroDocumento)
    {
        return $this
            ->findOneBy(array(
                'sexo' => $sexo,
                'tipoDocumento' => $tipoDocumento,
                'numeroDocumento' => $numeroDocumento,
            ));
    }
}


?>