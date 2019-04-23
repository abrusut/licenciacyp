<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\ITipoLicenciaRepository;
use MProd\LicenciaCyPBundle\Entity\Provincia;

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

    public function findTiposLicenciaForProvincia(Provincia $provincia){
        $this->logger->info("Buscando Tipos de Licencia para provincia id ".$provincia->getId());
        $tiposLicencia = $this->tipoLicenciaRepository->findAll();

        $tiposLicenciaResult = array();
        foreach($tiposLicencia as $tipoLicencia){
            if(!is_null($tipoLicencia) && 
                !is_null($tipoLicencia->getAplicaEnProvincia())){

                if($provincia->isSantaFe() && 
                    $tipoLicencia->getAplicaEnProvincia() == TipoLicencia::$SF){
                        array_push($tiposLicenciaResult, $tipoLicencia);
                }

                if(!$provincia->isSantaFe() && 
                    ($tipoLicencia->getAplicaEnProvincia() == TipoLicencia::$T 
                        || is_null($tipoLicencia->getAplicaEnProvincia()))){
                        array_push($tiposLicenciaResult, $tipoLicencia);
                }
            }
        }
        return $tiposLicenciaResult;
    }
}

?>