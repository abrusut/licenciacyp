<?php
namespace MProd\LicenciaCyPBundle\Service;

use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\IRendicionRepository;
use MProd\LicenciaCyPBundle\Entity\Rendicion;

class RendicionServiceImpl implements IRendicionService{

    private $rendicionRepository;
    private $logger;
    

    public function __construct(LoggerInterface $logger, IRendicionRepository $rendicionRepository)
    {
        $this->rendicionRepository = $rendicionRepository;
        $this->logger = $logger;        
    }    

     /**
     * @param MProd\LicenciaCyPBundle\Entity\Rendicion     
     * @return void
     */  
    public function save(Rendicion $rendicion){
        $this->logger->info("Guardando Rendicion ".$rendicion);
        return $this->rendicionRepository->save($rendicion);
    }

    public function findById($id){
        $this->logger->info("Buscando Rendicion por id ".$id);
        return $this->rendicionRepository->findById($id);       
    }
}



?>