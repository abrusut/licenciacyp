<?php

namespace MProd\LicenciaCyPBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MProd\LicenciaCyPBundle\Entity\Comprobante;


/**
 * ComprobanteRepository
 *
 */
class ComprobanteRepository extends EntityRepository implements IComprobanteRepository
{
     /**
     * @param MProd\LicenciaCyPBundle\Entity\Comprobante     
     * @return void
     */  
    public function save(Comprobante $comprobante)
    {
        $this->_em->persist($comprobante);
        $this->_em->flush();
    }    

    public function findById($id){
        return $this->find($id);
    }

}


?>