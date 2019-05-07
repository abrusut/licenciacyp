<?php
namespace MProd\LicenciaCyPBundle\Service;

use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\ILiquidacionRepository;
use MProd\LicenciaCyPBundle\Entity\Liquidacion;

class LiquidacionServiceImpl implements ILiquidacionService{

    private $liquidacionRepository;
    private $logger;
    

    public function __construct(LoggerInterface $logger, ILiquidacionRepository $liquidacionRepository)
    {
        $this->liquidacionRepository = $liquidacionRepository;
        $this->logger = $logger;        
    }    

     /**
     * @param MProd\LicenciaCyPBundle\Entity\Liquidacion     
     * @return void
     */  
    public function save(Liquidacion $liquidacion){
        return $this->liquidacionRepository->save($liquidacion);
    }

    public function findById($id){
        $this->logger->info("Buscando liquidacion por id ".$id);
        return $this->liquidacionRepository->findById($id);       
    }
}



?>