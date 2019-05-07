<?php
namespace MProd\LicenciaCyPBundle\Service;

use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\IAtributoConfiguracionRepository;
use MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion;

class AtributoConfiguracionServiceImpl implements IAtributoConfiguracionService{

    private $atributoConfiguracionRepository;
    private $logger;
    

    public function __construct(LoggerInterface $logger, IAtributoConfiguracionRepository $atributoConfiguracionRepository)
    {
        $this->atributoConfiguracionRepository = $atributoConfiguracionRepository;
        $this->logger = $logger;        
    }    

     /**
     * @param MProd\LicenciaCyPBundle\Entity\AtributoConfiguracion     
     * @return void
     */  
    public function save(AtributoConfiguracion $atributoConfiguracion){
        return $this->atributoConfiguracionRepository->save($atributoConfiguracion);
    }

    public function findById($id){
        $this->logger->info("Buscando AtributoConfiguracion por id ".$id);
        return $this->atributoConfiguracionRepository->findById($id);       
    }

    public function getAtributoConfiguracion($clave){
        $this->logger->info("Buscando AtributoConfiguracion por clave ".$clave);
        $atributoConfiguracion = null;

        $atributosConfiguracion = 
            $this->atributoConfiguracionRepository->findAtributoConfiguracionByClave($clave);       
        
        if($atributosConfiguracion!=null &&
            is_array($atributosConfiguracion) &&
             count($atributosConfiguracion)>0){
                $atributoConfiguracion = $atributosConfiguracion[0]; 
        }
                
        return $atributoConfiguracion;       
    }
}



?>