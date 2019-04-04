<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Persona;
use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\IPersonaRepository;


class PersonaServiceImpl implements IPersonaService {

    private $logger;
    private $personaRepository;

    public function __construct(LoggerInterface $logger, 
        IPersonaRepository $personaRepository )
    {        
        $this->logger =  $logger;
        $this->personaRepository = $personaRepository;        
    }

     /**
     * @param MProd\LicenciaCyPBundle\Entity\Persona     
     * @return void
     */  
    public function save(Persona $persona){
        return $this->personaRepository->save($persona);
    }

    public function findById($id){
        $this->logger->info("Buscando Persona por id ".$id);
        return $this->personaRepository->findById($id);       
    }

    public function findBySexoAndTipoDocumentoAndNumeroDocumento($sexo,$tipoDocumento,
        $numeroDocumento){
        
        $this->logger->info("Buscando Persona por findBySexoAndTipoDocumentoAndNumeroDocumento "
            .$sexo." ".$tipoDocumento." ".$numeroDocumento);

        return $this->personaRepository
                        ->findBySexoAndTipoDocumentoAndNumeroDocumento(
                            $sexo,
                            $tipoDocumento,
                            $numeroDocumento);
      
    }
}

?>