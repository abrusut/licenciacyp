<?php

namespace MProd\LicenciaCyPBundle\Service;

use Doctrine\ORM\EntityManager;
use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
use Psr\Log\LoggerInterface;


class TipoLicenciaServiceImpl implements ITipoLicenciaService {

    private $em;

    public function __construct(LoggerInterface $logger,EntityManager $entityManager )
    {
        $this->em = $entityManager;
    }

    public function findById($id){
        return  $this->em
                ->getRepository(TipoLicencia::class)
                ->find($id);
    }
}

?>