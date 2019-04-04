<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\ITipoLicenciaRepository;



class TipoLicenciaServiceImpl implements ITipoLicenciaService {
    
    private $logger;
    private $tipoLicenciaRepository;

    public function __construct(LoggerInterface $logger, 
            ITipoLicenciaRepository $tipoLicenciaRepository )
    {
        $this->logger = $logger;
        $this->tipoLicenciaRepository = $tipoLicenciaRepository;
    }

    /**
     * @param MProd\LicenciaCyPBundle\Entity\TipoLicencia     
     * @return void
     */  
    public function save(TipoLicencia $tipoLicencia){
        return $this->tipoLicenciaRepository->save($tipoLicencia);
    }

    public function findById($id){
        $this->logger->info("Buscando TipoLicencia por id ".$id);
        return $this->tipoLicenciaRepository->findById($id);       
    }
}

?>