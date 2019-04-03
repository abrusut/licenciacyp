<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Persona;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Psr\Log\LoggerInterface;


class PersonaServiceImpl implements IPersonaService {

    private $em;
    private $logger;

    public function __construct(LoggerInterface $logger, EntityManager $entityManager )
    {
        $this->em = $entityManager;
        $this->logger =  $logger;
    }

    public function findById($id){
        $this->logger->info("Buscando Persona por id ".$id);
        return  $this->em
                ->getRepository(Persona::class)
                ->find($id);
    }

    public function findBySexoAndTipoDocumentoAndNumeroDocumento($sexo,$tipoDocumento,
        $numeroDocumento){

        $this->logger->info("Buscando Persona por findBySexoAndTipoDocumentoAndNumeroDocumento "
                    .$sexo." ".$tipoDocumento." ".$numeroDocumento);
       
        $encoders = new JsonEncoder();
        $normalizer = new GetSetMethodNormalizer();
        
        $callback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format('d/m/Y')
                : '';
        };

        $normalizer->setCallbacks(array('fechaNacimiento' => $callback));
        $normalizer->setIgnoredAttributes(array('licencias'));

        $serializer = new Serializer(array($normalizer), array($encoders));       
        
        $persona = $this->em
                            ->getRepository(Persona::class)
                            ->findOneBy(array(
                                'sexo' => $sexo,
                                'tipoDocumento' => $tipoDocumento,
                                'numeroDocumento' => $numeroDocumento,
                            ));

        
        return $serializer->serialize($persona, 'json');         
    }
}

?>