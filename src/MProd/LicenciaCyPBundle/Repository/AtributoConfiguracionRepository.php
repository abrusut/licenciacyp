<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion;

/**
 * AtributoConfiguracionRepository
 *
 */
class AtributoConfiguracionRepository extends EntityRepository implements IAtributoConfiguracionRepository
{
    public function save(AtributoConfiguracion $atributoConfiguracion)
    {
        $this->_em->persist($atributoConfiguracion);
        $this->_em->flush();
    }    

    public function findById($id){
        return $this->find($id);
    }

    public function findAtributoConfiguracionByClave($clave){
        return $this->findBy(array(
            'clave' => $clave,
            'fechaBaja' => null
            )
        );
    }
}


?>