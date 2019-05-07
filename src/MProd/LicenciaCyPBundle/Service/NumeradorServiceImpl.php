<?php
namespace MProd\LicenciaCyPBundle\Service;

use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\INumeradorRepository;
use MProd\LicenciaCyPBundle\Entity\Numerador;

class NumeradorServiceImpl implements INumeradorService{

    private $numeradorRepository;
    private $logger;
    

    public function __construct(LoggerInterface $logger, INumeradorRepository $numeradorRepository)
    {
        $this->numeradorRepository = $numeradorRepository;
        $this->logger = $logger;        
    }    

     /**
     * @param MProd\LicenciaCyPBundle\Entity\Numerador     
     * @return void
     */  
    public function save(Numerador $numerador){
        return $this->numeradorRepository->save($numerador);
    }

    public function findById($id){
        $this->logger->info("Buscando liquidacion por id ".$id);
        return $this->numeradorRepository->findById($id);       
    }
}



?>