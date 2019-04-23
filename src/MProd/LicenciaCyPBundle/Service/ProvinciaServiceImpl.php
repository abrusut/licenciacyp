<?php

namespace MProd\LicenciaCyPBundle\Service;

use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Entity\Provincia;
use MProd\LicenciaCyPBundle\Repository\IProvinciaRepository;

class ProvinciaServiceImpl implements IProvinciaService {

    private $logger;
    private $provinciaRepository;

    public function __construct(LoggerInterface $logger, 
        IProvinciaRepository $provinciaRepository )
    {        
        $this->logger =  $logger;
        $this->provinciaRepository = $provinciaRepository;        
    }

     /**
     * @param MProd\LicenciaCyPBundle\Entity\Provincia     
     * @return void
     */  
    public function save(Provincia $provincia){
        return $this->provinciaRepository->save($provincia);
    }

    public function findById($id){
        $this->logger->info("Buscando Provincia por id ".$id);
        return $this->provinciaRepository->findById($id);       
    }

    public function findByProvinciaIdAndProvinciaNombre($provinciaId,$provinciaNombre){
        
        $this->logger->info("Buscando Persona por findByProvinciaIdAndProvinciaNombre "
            .$provinciaId." ".$provinciaNombre);

        return $this->provinciaRepository
                        ->findByProvinciaIdAndProvinciaNombre(
                            $provinciaId,
                            $provinciaNombre);
      
    }
}

?>